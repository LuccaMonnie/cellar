<!DOCTYPE php>

<html lang="en">

<head>
<style>
body {background-color: lightBlue;}
h3   {color: blue;}
li   {color: indigo;}
h2    {color: DeepPink;}
</style>
  <meta charset="utf-8">

  <title>Home Page</title>
</head>

<body>
  <h2>Project 1: Questions and Answers</h2>

  <ul>
  <li><h3>What command can you type into the terminal to check if apache is currently running?</h3></li>
      <ul style="list-style-type:circle">
        <li>/etc/init.d/apache2 status</li>
    </ul>
    <br>
    <li><h3>Apache implements the HTTP protocol. The protocol is extremely simple, with just a few commands. What is the difference between the GET, POST, and HEAD commands?</h3></li>
      <ul style="list-style-type:circle">
        <li>Get: Requests a transfer of a current selected representation for of the specified resource. Requests using GET should only retrieve data and is the primary
          mechanism of information for data retrieval and all performance optimization. Yes the request has a body. Syntax: GET /index.html</li>
        <li>Head: Asks for a response identical to that of a GET request, but without the response body. Therefore, the response ends at the end of the header section.
          It is used to obtain metadata about a selected representation without transferring the representation data. Also common to used for testing hyer links.
           Syntax:HEAD /index.html</li>
        <li>Post:  Is used to submit an entity to the specified resource, often causing a change in state or side effects on the server. Some of the specific semantics a POST
           methods is used for is to provide a block of data to data-handling process, creating a new resources that has yet to be identified by the origin, and appending data
           to a resource existing representation. </li>
      </ul>
      <br>
   <li><h3>To Apache, what is the difference between ServerRoot and DocumentRoot?</h3></li>
          <ul style="list-style-type:circle">
            <li>In Apache, ServerRoot is the base path/directory for the servers installation. This directive sets where the server's configuration file that is executable.</li>
            <li>Meanwhile, DocumentRoot is the main path/directory that creates the document tree that is visible from the web server. Therefore, this directives sets which of
               the httpd will be the directory and serve the files, such as the server configuration file and the virtual host. </li>
        </ul>
        <br>
    <li><h3>What port does your web server listen to for HTTP connections from browsers by default? Test it out by typing this into your browser: http://ip_addr:port, where ip_addr is
     the IP address of your server, and port is the port number given in the configuration file. Try changing the port number to something else. Test it again in your browser,
     then change it back. The fact that you don't usually need to specify the port when going to a URL should tell you that the default port to access web servers is the one given
      in the config file.<h3></li>
            <ul style="list-style-type:circle">
              <li>Our web server listen to Port 80 for HTTP connections. </li>
          </ul>
          <br>
  <li><h3>In what directory do you need to place all of your HTML and PHP documents for Apache to serve them up? Test it by navigating to this directory, and if your hunch is right,
     you should find that default It Worked! HTML document you saw when you pointed your web browser to your IP address<h3></li>
              <ul style="list-style-type:circle">
                <li> /var/www/html</li>
            </ul>
            <br>
   <li><h3>What file contains all of Apache's traffic logs? What about apache's error logs? Navigate to the traffic logs and open it up. Is the last access from one of your machines?<h3></li>
                <ul style="list-style-type:circle">
                  <li>/var/log/apache2/access.log</li>
                  <li>/var/log/apache2/error.log</li>
                  <li>/Yes, the last access was from our machines.</li>

              </ul>
              <br>
  <li><h3>What is a Directory Index file? Why would it be nice to have one in each directory?<h3></li>
                  <ul style="list-style-type:circle">
                    <li>A Directory Index file helps to provide the directive and sets the name of the file, by serving as a directory index file. It can allow to specify a default
                      page to display when a specific directory is accessed. Further, you can list multiple files to attempt to display for when one is not available it can look
                       for the next.</li>
                    <li> Yes, it would be nice to have one in each directory . Then there would be a default page for the Apache Web Serve to display. This is better for the user
                      to be able to look at rather than seeing a error message, directory listing not available message, or other form of directory listing. </li>
                </ul>
                <br>
     <li><h3>How do you give every user on your Linux server their own web space? Enable it now!<h3></li>
                    <ul style="list-style-type:circle">
                      <li>The UserDir directive allows each user to have a web site in their home directory.</li>
	                    <li>Because apache2.conf says: <br>
                        # Include module configuration:<br>
		                    IncludeOptional mods-enabled/*.load<br>
		                    IncludeOptional mods-enabled/*.conf<br>
                        We have to use <br>
                        		sudo a2enmod userdir<br>
                        Which will make the userdir.conf in /etc/apache2/mods-enabled <br>


                      </li>
                  </ul>
                  <br>
      <li><h3>How do you create a password-protected directory (like I did for the class notes)? Look into htpasswd and .htaccess files.</h3></li>
            <ul style="list-style-type:circle">
                <li>Using a password file, the htpasswd hidden file, you can set up a password for a specific page to be password protected. A list of users and their passwords is inputted into the file as separate entries, and they show up in the file as users and their encrypted passwords. With the login information saved in a way that apache can understand it can be used to make it password protected by using .htaccess. The .htaccess file is where the specific directory to apply the password protection to is specific with a Directory block, so that some pages can be unprotected and others can be protected using the same credentials. It is a per-directory file. To use this kind of file, you also need to have a server configuration to permit putting the authentication directives into these files.

                </li>
                </ul>
          <br>

          <li><h3>When the browser tries to access a page that doesn't exist, the HTTP protocol issues a 404 error code. Try it by navigating to a non-existent page on your server. Kind of an unhelpful and ungraceful way of telling users a page doesn't exist, right? Well, there's a way to send the browser to a particular page instead. For instance, if you go to this non-existent page on our school's website http://cs.pugetsound.edu/david_awesome.html, you'll just get brought back to the department home page. How do you do the automatic redirect given a 404 error?</h3></li>
                <ul style="list-style-type:circle">
                    <li>Adding the code in your .htaccess file: <br>
                       ErrorDocument 404 index.html<br>
                      So it automatically redirects to the homepage<br>
                        </li>
                    </ul>
              <br>

    <img src="egg.jpg">





</ul>

</body>
</html>
