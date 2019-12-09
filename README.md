# php-router
PHP Simple routing system for <b>APIs</b> based.


# Examples
<b>GET Request:</b>  

<b>$req</b> = The value getted from /sayHello<b>?name=Johnson</b>
<pre>
function sayHello($name) {  
  return 'Hello, $name!';
}

$router->get('/sayHello', function(<b>$req</b>, $res) use sayHello {  
  $helloMsg = sayHello($req->name);
  $res->send($helloMsg);  
});
</pre>

The following example will output:
<pre>
Hello, Johnson!
</pre>
