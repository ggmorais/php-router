# php-router
PHP Simple routing system for <b>APIs</b> based.


# Examples
<b>GET Request:</b>  

<b>$req</b> = The value obtained from /sayHello<b>?name=Johnson</b>
<pre>
require 'Router.php'

$router = new Router();

function sayHello($name) {  
  return 'Hello, $name!';
}

$router->get('/sayHello', function(<b>$req</b>, $res) use sayHello {  
  $helloMsg = sayHello($req->name);
  $res->send($helloMsg);  
});
</pre>

The example will output:
<pre>
Hello, Johnson!
</pre>

The same works for POST request, we just need to switch the word "get" to "post"
<pre>
$router-><b>post</b>('/sayHello', ...)
</pre>
