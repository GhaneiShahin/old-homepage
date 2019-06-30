<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('18ce350a4485e02b2036880ace58ba9d-29b7488f-eaa43ced');
$domain = "sandbox4ffbf1ab6f0744ed9182bf5a535b4eb7.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
	array('from'    => 'Mailgun Sandbox <postmaster@sandbox4ffbf1ab6f0744ed9182bf5a535b4eb7.mailgun.org>',
		'to'      => 'Amirreza Ghanei <ghaneishahin73@gmail.com>',
		'subject' => 'Hello Amirreza Ghanei',
		'text'    => 'Congratulations Amirreza Ghanei, you just sent an email with Mailgun!  You are truly awesome! '));

// You can see a record of this email in your logs: https://app.mailgun.com/app/logs.

// You can send up to 300 emails/day from this sandbox server.
// Next, you should add your own domain so you can send 10000 emails/month for free.
?>