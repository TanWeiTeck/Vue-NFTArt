<h2>Hello Admin</h2>

<p>{{$Purchase}}</p>
{{-- {{dd($Purchase)}} --}}
{{-- {{dd($Purchase->name)}}; --}}


<p>There is a new purchase from <strong>{{$Purchase->name}}</strong>  on <strong>{{$Purchase->created_at}}</strong>, please find the purchasing details below:</p>

<p>Name: {{$Purchase->name}}</p>
<p>Email: {{$Purchase->email}}</p>
<p>Contact: {{$Purchase->contact}}</p>
<p>Location: {{$Purchase->location}}</p>

<a href='http://art.test/admin'>View in admin dashboard</a>
