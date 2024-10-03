@extends('layouts.guest')
@section('content')
@section('title', $title)

<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title ?? "-" }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				{{-- <h2>Welcome to {{ config('app.name') }}</h2> --}}
				<p>Wisdom tooth extraction is a common dental procedure in which one or more of the third molars (also known as wisdom teeth) are removed from the mouth. Wisdom teeth often cause problems when they don't have enough room to come in properly, causing pain, infection, and other issues.</p><br>
				<p>The extraction process can vary depending on the individual case, but generally involves numbing the area around the tooth with local anesthesia, making an incision in the gum tissue to access the tooth, and then carefully removing it. In some cases, the tooth may need to be broken into smaller pieces to facilitate its removal.</p><br>
				<p>After the procedure, you will may experience some swelling and discomfort, which can be managed with pain medication and ice packs. You should also avoid eating hard or crunchy foods and smoking for a few days, and follow your dentist's instructions for aftercare and follow-up appointments.</p><br>
				<p>It's important to note that not everyone needs to have their wisdom teeth extracted. Your dentist will evaluate your individual case and make a recommendation based on your specific needs and circumstances.</p><br>
				<h2>You may need wisdom tooth surgery if you have the following symptoms;</h2>
				<p><b>An unpleasant taste in your mouth;</b> If you get tooth decay or an infection in your wisdom teeth, they can cause a persistent bad taste. Again, prevention is better than cure, and having your wisdom teeth removed is a good way to get rid of this problem.</p><br>
				<p><b>Bad breath;</b> If your wisdom teeth are impacted and cannot be properly cleanly, they can trap food and bacteria, irritate your gums, and injure other teeth. All of these things can contribute to the type of infection and inflammation that can cause bad breath.</p><br>
				<p><b>Bleeding, red or swollen gums in the corner of your jaw;</b> One of the first signs of your wisdom teeth coming in is when you feel any discomfort or tenderness around the back of your mouth. This can be on one or either side. You may also notice swollen gums.</p><br>
				<p><b>Difficulty opening your mouth</b> due to your wisdom teeth can also make it difficult to open and close your mouth.</p><br>
				<p><b>Swelling around the jaw;</b> As your wisdom teeth come in, they can push against your other teeth. This in turn can cause discomfort in your jaw, so it feels stiff, sore and difficult to open. This can also cause swelling of both the gum in the back of the mouth or on the side of the jaw.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
