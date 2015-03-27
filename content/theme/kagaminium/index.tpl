<h1>{owner}</h1>
{fbfeeds}
<form action="index.php?p=mail" method="post">
    Temat: <input type="text" name="subject" /><br />
    Twój e-mail: <input type="text" name="email" /><br />
    Treść: <textarea name="mess"></textarea><br />
    <input type="submit" value="Wyślij" />
</form>