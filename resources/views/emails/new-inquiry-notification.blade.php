<h2>New Inquiry from {{ $inquiry->first_name }} {{ $inquiry->last_name }}</h2>
<p><strong>Country:</strong> {{ $inquiry->country }}</p>
<p><strong>Email:</strong> {{ $inquiry->email }}</p>
<p><strong>Phone:</strong> {{ $inquiry->phone }}</p>
<p><strong>Message:</strong></p>
<p>{{ $inquiry->message }}</p>