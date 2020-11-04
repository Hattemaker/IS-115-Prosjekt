<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Profile</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <form>
      <div class="form-group">
        <label for="firstname">First Name</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-card"></i>
            </div>
          </div>
        <input id="firstname" name="firstname" placeholder="First Name" type="text" required="required" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div>
        <input id="lastname" name="lastname" placeholder="Last Name" type="text" required="required" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-home"></i>
          </div>
        </div>
        <input id="address" name="address" placeholder="Address" type="text" required="required" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div>
        <input id="email" name="email" placeholder="E-mail" type="text" required="required" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="phonenumber">Phone Number</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-phone"></i>
          </div>
        </div>
        <input id="phonenumber" name="phonenumber" placeholder="Phone Number" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="gender">Gender</label>
      <div>
        <select id="gender" name="gender" class="custom-select">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label>Course Activities</label>
      <div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="activities" id="activities_0" type="checkbox" class="custom-control-input" value="plc1">
        <label for="activities_0" class="custom-control-label">Placeholder</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="activities" id="activities_1" type="checkbox" class="custom-control-input" value="plc2">
          <label for="activities_1" class="custom-control-label">Placeholder</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="activities" id="activities_2" type="checkbox" class="custom-control-input" value="plc3">
          <label for="activities_2" class="custom-control-label">Placeholder</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="activities" id="activities_3" type="checkbox" class="custom-control-input" value="plc4">
          <label for="activities_3" class="custom-control-label">Placeholder</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label>Interest</label>
      <div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="inter" id="inter_0" type="checkbox" class="custom-control-input" value="plc1">
          <label for="inter_0" class="custom-control-label">Placeholder</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="inter" id="inter_1" type="checkbox" class="custom-control-input" value="plc2">
          <label for="inter_1" class="custom-control-label">Placeholder</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="inter" id="inter_2" type="checkbox" class="custom-control-input" value="plc3">
          <label for="inter_2" class="custom-control-label">Placeholder</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="inter" id="inter_3" type="checkbox" class="custom-control-input" value="plc4">
          <label for="inter_3" class="custom-control-label">Placeholder</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="inter" id="inter_4" type="checkbox" class="custom-control-input" value="plc5">
          <label for="inter_4" class="custom-control-label">Placeholder</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <button name="submit" type="submit" class="btn btn-primary">Create User</button>
    </div>
    </form>
  </body>
</html>
