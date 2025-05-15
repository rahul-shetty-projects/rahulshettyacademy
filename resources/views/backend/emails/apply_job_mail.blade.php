<!doctype html>
<html lang="en">
<head>
  <title>Job Application</title>
</head>
<body>
  	<div style="margin:5px; padding:0px; background:#333; color:#fff">
		<h1 style="margin:0px; background:#68462D; color:#fff; padding:10px 20px; text-align:center">
		Job Application</h1>
		<p>&nbsp;A user has submitted the below email for job application</p>
		<table style="margin:5px auto; width:98%">
		<tbody>
		<tr>
		<td style="background:#444; border:1px solid #333; padding:5px">Name</td>
		<td style="background:#444; border:1px solid #333; padding:5px">{{ $data->name }}</td>
		</tr>
		<tr>
		<td style="background:#444; border:1px solid #333; padding:5px">Email Address</td>
		<td style="background:#444; border:1px solid #333; padding:5px">{{ $data->email }}</td>
		</tr>
		<tr>
		<td style="background:#444; border:1px solid #333; padding:5px">Mobile</td>
		<td style="background:#444; border:1px solid #333; padding:5px">{{ $data->mobile }}</td>
		</tr>
		<tr>
		<td style="background:#444; border:1px solid #333; padding:5px">Country</td>
		<td style="background:#444; border:1px solid #333; padding:5px">{{ $data->country }}</td>
		</tr>
		<tr>
		<td style="background:#444; border:1px solid #333; padding:5px">Job type</td>
		<td style="background:#444; border:1px solid #333; padding:5px">{{ $data->jobtype }}</td>
		</tr>
		<tr>
		<td style="background:#444; border:1px solid #333; padding:5px">Is Subscriber</td>
		<td style="background:#444; border:1px solid #333; padding:5px">{{ $data->subject }}</td>
		</tr>
		<tr>
		<td style="background:#444; border:1px solid #333; padding:5px">Message</td>
		<td style="background:#444; border:1px solid #333; padding:5px">{{ $data->message }}</td>
		</tr>
		</tbody>
		</table>
		<br>
		<div style="margin:0px; background:#222; color:#fff; padding:5px 20px; text-align:center">
			This is an auto generated eMail sent via 
			<span data-markjs="true" class="markf369rpmlk" data-ogac="" data-ogab="" data-ogsc="" data-ogsb="" style="background-color: rgb(255, 241, 0); color: black;">Rahul Shetty</span> 
			<span data-markjs="true" class="markns1wl7mv3" data-ogac="" data-ogab="" data-ogsc="" data-ogsb="" style="background-color: rgb(255, 241, 0); color: black;">Academy</span>
		</div>
	</div>
</body>
</html>