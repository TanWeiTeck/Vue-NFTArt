<h2>Hello Admin</h2>

<p>There is a new purchase from <strong>{{$purchase->name}}</strong>  on <strong>{{$purchase->created_at}}</strong>, please find the purchasing details below:</p>

<p>Name: {{$purchase->name}}</p>
<p>Email: {{$purchase->email}}</p>
<p>Contact: {{$purchase->contact}}</p>
<p>Location: {{$purchase->location}}</p>

<a href='http://art.test/admin'>View in admin dashboard</a>
