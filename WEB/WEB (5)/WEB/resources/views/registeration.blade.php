
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Employees</h2>
  <form action="{{route('employee.update')}}">
  <!-- <div class="form-group">
      <label for="id">ID:</label>
      <input type="ID" class="form-control" id="ID" placeholder="Enter ID" name="ID">
    </div> -->
    @foreach($data as $replace)
    <input type="hidden" value="{{$replace->employeeID}}" class="form-control" id="id"  name="id">
  <div class="form-group">
      <label for="FirstName">FirstName:</label>
      <input type="FirstName" class="form-control" id="FirstName" placeholder="{{$replace->firstName}}" name="firstName">
    </div>
    <div class="form-group">
      <label for="LastName">LastName:</label>
      <input type="LastName" class="form-control" id="LastName" placeholder="{{$replace->lastName}}" name="lastName">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="{{$replace->email}}" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="{{$replace->password}}" name="pass">
    </div>
    <div class="form-group">
      <label for="Phone">Phone:</label>
      <input type="Phone" class="form-control" id="Phone" placeholder="{{$replace->phone}}" name="phone">
    </div>
    <div class="form-group">
      <label for="Gender">Gender:</label>
      <input type="Gender" class="form-control" id="Gender" placeholder="{{$replace->gender}}" name="gender">
    </div>
    @endforeach
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
