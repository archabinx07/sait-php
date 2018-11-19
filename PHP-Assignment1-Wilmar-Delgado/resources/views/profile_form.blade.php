@extends ('layout')

@section('content')

<form action="/profile" method="post">
<?php echo csrf_field() ?>
  <fieldset>
    <legend>Profile Form:</legend>
    Name:<br>
    <input type="text" name="name" value="<?php echo $profile->name ?>">
    <?php if($error = $errors->first('name')): ?>
        <span class="text-danger"><?php echo $error ?></span>
    <?php endif; ?>
    <br>
    Description:<br>
    <input type="text" name="description" value="<?php echo $profile->description ?>">
    <?php if($error = $errors->first('description')): ?>
        <span class="text-danger"><?php echo $error ?></span>
    <?php endif; ?>
    <br>
    Website:<br>
    <input type="text" name="descriptionLink" value="<?php echo $profile->descriptionLink ?>">
    <?php if($error = $errors->first('descriptionLink')): ?>
        <span class="text-danger"><?php echo $error ?>(Website)</span>
    <?php endif; ?>
    <br>
    Image:<br>
    <input type="text" name="image" value="<?php echo $profile->image ?>">
    <?php if($error = $errors->first('image')): ?>
        <span class="text-danger"><?php echo $error ?></span>
    <?php endif; ?>
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

@endsection