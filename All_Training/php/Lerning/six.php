<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is for request method</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
</form>
</body>
</html>

<?php
// whta is  SUPERGLOBALS IN THE PHP THERE ARE SO MANY ......TYPES OF THE SUPERGLOBAL IN THE PHP 
// IF superglobal variable ones difine in the php it will accessible from any where inside the php script, regardless of the scop-and you can access them from 
// any function ,file or anything special,

// The superglobal variable are:
// . $GLOBALS
// .$_SERVER
// . $_REQUEST
// . $_POST
// . $_GET
// . $_FILES
// . $_ENV
// . $_COOKIES
// . $_SESSION
// ======================================= $GLOBALS==================================
// $GLOBALS is a php superglobal variable which is used access the variable from anywhere in php script
// (also within function or methods )
// PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable


// $x = 75;
// $y = 25;
 
// function addition() {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];//this is globally accessible in the anywhere is the php script 
// }
 
// addition();
// echo $z;


// PHP $_SERVER

// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

// The example below shows how to use some of the elements in $_SERVER:
// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];

// The following table lists the most important elements that can go inside $_SERVER:
// Element/Code 	Description
// $_SERVER['PHP_SELF'] 	Returns the filename of the currently executing script
// $_SERVER['GATEWAY_INTERFACE'] 	Returns the version of the Common Gateway Interface (CGI) the server is using
// $_SERVER['SERVER_ADDR'] 	Returns the IP address of the host server
// $_SERVER['SERVER_NAME'] 	Returns the name of the host server (such as www.w3schools.com)
// $_SERVER['SERVER_SOFTWARE'] 	Returns the server identification string (such as Apache/2.2.24)
// $_SERVER['SERVER_PROTOCOL'] 	Returns the name and revision of the information protocol (such as HTTP/1.1)
// $_SERVER['REQUEST_METHOD'] 	Returns the request method used to access the page (such as POST)
// $_SERVER['REQUEST_TIME'] 	Returns the timestamp of the start of the request (such as 1377687496)
// $_SERVER['QUERY_STRING'] 	Returns the query string if the page is accessed via a query string
// $_SERVER['HTTP_ACCEPT'] 	Returns the Accept header from the current request
// $_SERVER['HTTP_ACCEPT_CHARSET'] 	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
// $_SERVER['HTTP_HOST'] 	Returns the Host header from the current request
// $_SERVER['HTTP_REFERER'] 	Returns the complete URL of the current page (not reliable because not all user-agents support it)
// $_SERVER['HTTPS'] 	Is the script queried through a secure HTTP protocol
// $_SERVER['REMOTE_ADDR'] 	Returns the IP address from where the user is viewing the current page
// $_SERVER['REMOTE_HOST'] 	Returns the Host name from where the user is viewing the current page
// $_SERVER['REMOTE_PORT'] 	Returns the port being used on the user's machine to communicate with the web server
// $_SERVER['SCRIPT_FILENAME'] 	Returns the absolute pathname of the currently executing script
// $_SERVER['SERVER_ADMIN'] 	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
// $_SERVER['SERVER_PORT'] 	Returns the port on the server machine being used by the web server for communication (such as 80)
// $_SERVER['SERVER_SIGNATURE'] 	Returns the server version and virtual host name which are added to server-generated pages
// $_SERVER['PATH_TRANSLATED'] 	Returns the file system based path to the current script
// $_SERVER['SCRIPT_NAME'] 	Returns the path of the current script
// $_SERVER['SCRIPT_URI'] 	Returns the URI of the current page




// PHP $_REQUEST

// PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

// The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent 
// to the file specified in the action attribute of the <form> tag. In this example, we point to this file itself for processing form data. If you wish to use another
//  PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field:
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }

//  PHP $_POST

// PHP $_POST is a PHP super global variable which is used to collect form data 
//  after submitting an HTML form with method="post". $_POST is also widely used to pass variables.
// The example below shows a form with an input field and a submit button. When a user 
// submits the data by clicking on "Submit", the form data is sent to the file specified in the
//  action attribute of the <form> tag. In this example, we point to the file itself for processing 
// form data. If you wish to use another PHP file to process form data, replace that with the filename 
// of your choice. Then, we can use the super global variable $_POST to collect the value of the input 
// field:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
// PHP $_GET

// PHP $_GET is a PHP super global variable which is used to collect form data
//  after submitting an HTML form with method="get".

// $_GET can also collect data sent in the URL.

// Assume we have an HTML page that contains a hyperlink with parameters:


?>