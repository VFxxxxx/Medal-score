<!DOCTYPE html>
<html>
<head>
	<title>{$data['medal_type']} медали</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1 class="pb">
		{$data['country']['countryName']} ,  
		{$data['medal_type']} медали</h1>

	{for $i=0 to $data['sportsmens']|@count-1}
		{$i+1} . {$data['sportsmens'][$i]['name']}
		{$data['sportsmens'][$i]['surname']} - 
		{$data['sportsmens'][$i]['sport']} </br>
	{/for}

</body>
</html>