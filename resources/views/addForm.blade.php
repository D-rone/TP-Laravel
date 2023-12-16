<form method="post" action="/addUser">
    <input type="hidden" name="_token" value=<?php echo csrf_token(); ?> />
    <input type="text" name="login" />
    <input type="text" name="pwd" />
    <input type="submit" value="Inserer" />
</form>