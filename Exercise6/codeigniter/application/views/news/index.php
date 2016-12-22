<html>
<head>
<title>NicolaiLouise</title>
	</head>
	<body>
	<center>
	<style>
		body{
	background-image: url(<?base_url()?>Images/bg.png);	
		}
		body{
font-family: Stellar;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
	</style>
	</head>
	<body>
	<h1>HOME</h1>
<img  src="<?php echo base_url('Images/BS2.jpeg');?>" width=304px height=228px>

<p>I'm incomparabale. I'm not like anyone else. Because I'm me.<p>

<h2>ABOUT</h2>
<table style="width:100%">
  <tr>
    <th>Hobbies</th>
    <th>Interests</th>
  </tr>
  <tr>
    <td>Eating</td>
    <td>Music</td>
  </tr>
</table>
<br>
<p style ="font-size:50; font-family:Lucida Sans; color:black"> These are my favorite sites:</p>
<a href="http://www.facebook.com"/></a>
<img  src="<?php echo base_url('Images/facebook.jpg');?>" width=100 height=100>

<a href="http://www.lol.ph/"></a>
<img  src="<?php echo base_url('Images/lol.jpg');?>" width=100 height=100>

<a href="http://www.twitter.com/"></a>
<img  src="<?php echo base_url('Images/twitter.jpg');?>" width=100 height=100>
<br>
<p>Nicolai Louise B. Caasi, also known as "nics" she loves music and eating as well and aiming to be a web developer someday.<p>
<br>

<p id="Question1">What things do you do in your leisure time?</p>

<button type="button" onclick="document.getElementById('Question1').innerHTML = 'I compose songs and try to cover them as well.'">Click Me!</button>

<p id="Question2">What is your favorite kind of genre?</p>

<button type="button" onclick="document.getElementById('Question2').innerHTML = 'OPM, Acoustic, Electronic Music.'">Click Me!</button>

<p id="Question3">Explain why you love music so much.</p>

<button type="button" onclick="document.getElementById('Question3').innerHTML = 'Music keeps me going and takes me out of the dark hole called life.'">Click Me!</button>

<p id="Question4">What songs do you like?</p>

<button type="button" onclick="document.getElementById('Question4').innerHTML = 'Almost is Never Enough by Ariana Grande and Bed of Lies by Nicki Minaj'">Click Me!</button>

<p id="Question5">Who is favorite artist?</p>

<button type="button" onclick="document.getElementById('Question5').innerHTML = 'Nicki Minaj and Ariana Grande.'">Click Me!</button>
			
<div id = "Visitors">
<h2><?php echo $title; ?></h2>

<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
		<td><strong>Email</strong></td>
        <td><strong>Home_Address</strong></td>
		<td><strong>Gender</strong></td>
        <td><strong>Cp_Num</strong></td>
        <td><strong>Comment</strong></td>
		<td><strong>Action</strong></td>
    </tr>
<?php foreach ($userinfo as $news_item): ?>
        <tr>
            <td><?php echo $news_item['Name']; ?></td>
			<td><?php echo $news_item['Nickname']; ?></td>
			<td><?php echo $news_item['Email']; ?></td>
			<td><?php echo $news_item['Home_Address']; ?></td>
			<td><?php echo $news_item['Gender']; ?></td>
			<td><?php echo $news_item['Cp_Num']; ?></td>
			<td><?php echo $news_item['Comment']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['User_ID']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['User_ID']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['User_ID']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>
