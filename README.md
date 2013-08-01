#Simple Template PHP (tmpl)

##Usage

####import
```html
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{title}</title>
</head>
<style>
<body>
	<h1>{title}</h1>
	<p>{text}</p>
</body>
</html>

```

```php
include_once( 'tmpl.class.php' );

$data = array(
	'title' => "Simple Template PHP (tmpl)", 
	'text' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
$template = new tmpl("template.tpl", $data);
$template->display();
```

