# easy-contact-form

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

easy-contact-form is a an easy HTML contact form with configured php script build in

# Features

  - Frontend: [HTML] website with contact form
  - Backend: [PHP] Email distributor on events


What you can do:
  - Edit the page design or migrate the form to your own page
  - Use the email notification feature for new messages 
  - Export script parts to your own project

### Installation

Downloads the full code from this repository.

To recive messages, change the following lines in the `contact.php`

```sh
40  // RECIVER
41  $EmailTo = "mail@example.com";
42  $SubjectTo = "New Message";
```

To edit the message body edit the following textfields *(line 46, 49, 52, 55, 58)*

```sh
44  // BODY
 ...
46  $Body .= "First Name: ";
 ...
49  $Body .= "Last Name: ";
 ...
52  $Body .= "E-Mail: ";
 ...
55  $Body .= "Subject: ";
 ...
58  $Body .= "Message: ";
```

**If you want to migrate the form to another website simply copy the code between ´<form>´ (line 34) and ´</form>´ (line 67), including the form tags itselfs.**

### Build

The shown template website is free to use (under MIT license) and is made with bootstrap.

_Parts of this work contain files out of forums_

#### License
This code is under MIT licence, you can find the complete file here: www.mylicencefile.com

Copyright 2020 github.com/master4x

----

**Free Code!**

