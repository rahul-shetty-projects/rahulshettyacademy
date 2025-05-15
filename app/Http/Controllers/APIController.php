<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Image;
use Session;
use Mail;

class APIController extends Controller
{
    public $to_name = "Rahul Shetty";
    public $to_email = "contact@rahulshettyacademy.com";

    public function getCourseAPI()
    {
        $courses_info = DB::table('courses_table')
            ->select('*')
            ->orderBy('course_order', 'asc')
            ->limit(12)
            ->get();

        $courses = array();
        foreach ($courses_info as $row) {
            $course = array();
            $course["name"] = $row->course_name;
            $course["author"] = $row->author_name;
            $course["imgURL"] = $row->course_image;
            $course["courseURL"] = $row->course_link;
            $course["old_price"] = $row->old_price;
            $course["old_price_in_dollar"] = $row->old_price_in_dollar;
            $course["actual_price"] = $row->actual_price;
            $course["actual_price_in_dollar"] = $row->actual_price_in_dollar;
            $course["noOfCourses"] = $row->no_of_courses;
            $course["userEnrolled"] = $row->user_enrolled;
            $course["userComments"] = $row->user_comments;
            $course["rate"] = $row->rate;
            if ($row->is_free) {
                $course["isFree"] = $row->is_free;
            }
            if ($row->is_bundle != 0) {
                $course["isBundle"] = true;
            }
            $courses[] = $course;
        }

        return response()->json($courses);
    }

    public function practiceProject(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $token = $this->getToken(8);

        $result = DB::table('projects_subscribers')
            ->select('*')
            ->where('email', $email)
            ->get();

        if (count($result) != 0 && $result[0]->is_verified == 1) { // Mail already exist and verified
            $outputData = array('error' => false, 'success' => true, 'isVerified' => true);
        } elseif (count($result) != 0 && $result[0]->is_verified != 1) { // Mail already exist & unverified
            $res_id = DB::table('projects_subscribers')
                ->where('email', $email)
                ->update([
                    'name' => $name,
                    'code' => $token
                ]);
            if ($res_id) {
                $subject = 'Validation code from Rahul Shetty Academy';
                $data = array('token' => $token);
                $email_template = 'backend.emails.project_token_mail';
                $isMailSent = $this->sendMail($name, $email, $data, $email_template, $subject);
                $outputData = array('error' => false, 'success' => true, 'isVerified' => false);
            } else {
                $outputData = array('error' => true, 'msg' => 'cant insert error occured');
            }
        } else {
            $res = DB::table('projects_subscribers')->insertGetId([
                'name' => $name,
                'email' => $email,
                'code' => $token,
                'is_verified' => 0
            ]);
            if ($res) {
                $subject = 'Validation code from Rahul Shetty Academy';
                $data = array('token' => $token);
                $email_template = 'backend.emails.project_token_mail';
                $isMailSent = $this->sendMail($name, $email, $data, $email_template, $subject);
                $outputData = array('error' => false, 'success' => true, 'isVerified' => false);
            } else {
                $outputData = array('error' => true, 'msg' => 'cant insert error occured');
            }
        }
        return response()->json($outputData);
    }

    public function validateToken(Request $request)
    {
        $email = $request->input('email');
        $hashed_password = $request->input('code');

        $result = DB::table('projects_subscribers')
            ->select('code')
            ->where('email', $email)
            ->get();

        if (count($result) != 0) {
            $isVerified = false;
            for ($i = 0; $i < count($result); $i++) {
                if ($result[$i] && $result[$i]->code == $hashed_password) {
                    $isVerified = true;
                }
            }
            if ($isVerified) {
                $scl_id = DB::table('projects_subscribers')
                    ->where('email', $email)
                    ->update(['is_verified' => 1]);
                $outputData = array('success' => true);
            } else {
                $outputData = array('success' => false);
            }
        } else {
            $outputData = array('success' => false);
        }

        return response()->json($outputData);
    }

    public function newsletterSubscription(Request $request)
    {
        $email_name = $request->input('email');
        $subject = 'Newsletter Subscription Mail';
        $data = array('email_name' => $email_name);
        $email_template = 'backend.emails.newsletter_mail';
        $isMailSent = $this->sendMail($this->to_name, $this->to_email, $data, $email_template, $subject);
        $response = array();
        if ($isMailSent) {
            $response["error"] = false;
            $response["message"] = "Mail Sent successful ..!";
        } else {
            $response["error"] = true;
            $response["message"] = "Mail Sent failed ..!";
        }
        return response()->json($response);
    }

    public function mentorshipRequest(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $bio = $request->input('bio');
        $stype = $request->input('stype');

        $subject = 'Mentorship Subscription Mail';

        $object = (object)['name' => $name];
        $object->email = $email;
        $object->mobile = $mobile;
        $object->bio = $bio;
        $object->stype = $stype;

        $data = array('data' => $object);
        $email_template = 'backend.emails.mentorship_mail';
        $isMailSent = $this->sendMail($this->to_name, $this->to_email, $data, $email_template, $subject);

        $outputData = array('success' => true);
        return response()->json($outputData);
    }

    public function consultingSubscription(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $timezone = $request->input('timezone');
        $city = $request->input('city');
        $description = $request->input('description');
        $stype = $request->input('stype');

        $subject = 'Consulting Subscription Mail';

        $object = (object)['name' => $name];
        $object->email = $email;
        $object->mobile = $mobile;
        $object->timezone = $timezone;
        $object->city = $city;
        $object->description = $description;
        $object->stype = $stype;

        $data = array('data' => $object);
        $email_template = 'backend.emails.consulting_mail';
        $isMailSent = $this->sendMail($this->to_name, $this->to_email, $data, $email_template, $subject);

        $outputData = array('success' => true);
        return response()->json($outputData);
    }

    public function consultingFormSubmission(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $timezone = $request->input('timezone');
        $req = $request->input('req');
        $programmingLang = $request->input('programmingLang');
        $sharing = $request->input('sharing');
        $afford = $request->input('afford');
        $toName = "RahulShettyAcademy Consulting Team";
        $toMail = "consulting@rahulshettyacademy.com";
        $ccMail = "contact@rahulshettyacademy.com";

        $subject = 'Consulting Subscription Mail';

        $object = (object)['name' => $name];
        $object->email = $email;
        $object->phone = $phone;
        $object->timezone = $timezone;
        $object->req = $req;
        $object->programmingLang = $programmingLang;
        $object->sharing = $sharing;
        $object->afford = $afford;

        $data = array('data' => $object);
        $email_template = 'backend.emails.consulting_form_mail';
        $isMailSent = $this->sendMail($toName, $toMail, $data, $email_template, $subject, $ccMail);

        $outputData = array('success' => true);
        return response()->json($outputData);
    }

    public function jobApplication(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $country = $request->input('country');
        $jobtype = $request->input('jobtype');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $subject = 'Job Application Mail';

        $object = (object)['name' => $name];
        $object->email = $email;
        $object->mobile = $mobile;
        $object->country = $country;
        $object->jobtype = $jobtype;
        $object->subject = $subject;
        $object->message = $message;

        $data = array('data' => $object);
        $email_template = 'backend.emails.apply_job_mail';
        $isMailSent = $this->sendMail($this->to_name, $this->to_email, $data, $email_template, $subject);

        $outputData = array('success' => true);
        return response()->json($outputData);
    }

    public function contactForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $country = $request->input('country');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $subject = 'Contact Form Mail';

        $object = (object)['name' => $name];
        $object->email = $email;
        $object->mobile = $mobile;
        $object->country = $country;
        $object->subject = $subject;
        $object->message = $message;

        $data = array('data' => $object);

        $email_template = 'backend.emails.contact_mail';
        $isMailSent = $this->sendMail($this->to_name, $this->to_email, $data, $email_template, $subject);

        $outputData = array('success' => true);
        return response()->json($outputData);
    }

    protected function sendMail($to_name, $to_email, $data, $email_template, $subject, $ccMail = null)
    {
        Mail::send($email_template, $data, function ($message) use ($to_name, $to_email, $subject, $ccMail) {
            $message->to($to_email, $to_name)
                ->subject($subject);
            if (isset($ccMail)) {
                $message->cc($ccMail);
            }
            $message->from('contact@rahulshettyacademy.com', 'Auto Mailer');
        });
        $mailStatus = true;
        if (Mail::failures()) {
            $mailStatus = false;
        }
        return $mailStatus;
    }

    protected function getToken($maxlen)
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $maxlen; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //return the array into a string
    }
}
