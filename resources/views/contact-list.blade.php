<!DOCTYPE html>
<html>
<head>
  <title>Contact list</title>
</head>
<body>
  <h1>List of students who left us a message on contact us form</h1>

  <table border="1">
    <thead>
      <tr>
        <td>ID</td>
        <td>First name</td>
        <td>Last name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Message</td>
      </tr>
    </thead>
    <tbody>
    @foreach($contactList as $contact)
    <tr>
      <td>{{ $contact->id }}</td>
      <td>{{ $contact->fname }}</td>
      <td>{{ $contact->lname }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->phone }}</td>
      <td>{{ $contact->message }}</td>
    </tr>
    @endforeach
    </tbody>
  </table>

</body>
</html>