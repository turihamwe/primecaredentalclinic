<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="PrimeCare Dental Clinic is a modern and patient-focused dental practice dedicated to providing top-quality oral healthcare. Our experienced team of dentists and specialists is committed to delivering comprehensive dental services in a warm and welcoming environment. From routine check-ups and cleanings to advanced treatments like dental implants and cosmetic procedures, we prioritize your oral health and overall well-being. At PrimeCare Dental Clinic, we aim to create healthy, beautiful smiles for our patients, emphasizing personalized care and cutting-edge technology to ensure the best possible outcomes. Your smile, our priority.">
	<meta name="keywords" content="Orthodontic treatment, Pediatric dentistry, Teeth alignment, Braces/Orthodontic treatment, Dental services in Kampala, Uganda, East Africa, Africa, near me, the world, Dental clinics, Dental clinics in Kampala near Kampala around Kampala, Best Dental clinic in Kampala, Dental clinic, Dentist near me, Dentist near by Kampala, Best Dental clinic In uganda, Kampala East Africa, Africa in the world, extractions, alignment, arrangement, Teeth whitening, cleaning teeth cleaning, best dentist, Dental bridge, crowns cheap crowns, best crowns, good dentist, good Dental clinic, nice dentist, nice Dental clinic, whitening in kampala, Artificial teeth, tooth replacement, replacing orthodontist, xray opg xray 2d xray 3d xray Dental services medical services clinics, clinic around me, near me doctors near me, best doctor in kampala, in uganda, available dentist, dentist around town, elite dental services, corporate hospital Dental clinic, International dentistry, worldwide dental care patient care  emergency dental clinic, Pediatric dentistry, Children's dentist, Baby care dentist, Customer care dentist, Implants around kampala, Uganda and more, Dental clinic open after 5pm in Kampala, Opg xray near me, Dentist near kampala, Dental clinic, Oral health, Dental care, Teeth cleaning, Tooth extraction, Cosmetic dentistry, Orthodontics, Dental implants, Emergency dentist, Pediatric dentistry, Oral hygiene, Gum disease, Dental checkup, Root canal, Wisdom teeth, Dental X,rays, Tooth whitening, Sedation dentistry, Dental restoration, Cavities, Tooth decay, Braces, Invisalign, Veneers, Crowns, Bridges, Periodontics, Dental fillings, TMJ treatment, Mouth guards, Digital impressions, Dental sealants, Fluoride treatment, Dental emergency, Oral surgery, Maxillofacial surgery, Enamel restoration, Dental plaque, Gingivitis, Flossing techniques, Dental prosthetics, Prosthodontics, Tooth sensitivity, Dental anxiety, Oral cancer screening, Teeth grinding, Dental insurance, Affordable dentistry, Holistic dentistry, Infection control, Dental technology, Same,day dentistry, Laser dentistry, Digital smile design, Bad breath remedies, Smile makeover, Family dentistry, Dental bridges, Emergency tooth repair, Oral surgery recovery, Dental phobia, Preventive dentistry, Pediatric orthodontics, Clear aligners, Dental scaling, Inlay and onlay, Dental crowding, Dental bonding, Tooth reshaping, Dental consultations, Metal,free dentistry, Wisdom tooth removal, Emergency dental extraction, Implant,supported dentures, Restorative dentistry, Periodontal treatment, Tooth restoration, Smile enhancement, Teeth straightening, Dental diagnostics, Composite fillings, Toothache relief, Emergency root canal, Dental lasers, Full mouth reconstruction, Infection control measures, Endodontic therapy, Dental pulp, Dental fluorosis, Tooth sensitivity treatment, Dental technology advancements, Cosmetic bonding, Intraoral cameras, Dental anatomy, Sedation options, Wisdom tooth extraction, Dental insurance plans, Dental bridges vs. implants, Comprehensive dental services, Dental crowns and bridges, Cavity prevention, Gum recession, Dental extractions, Denture care, Oral surgery options, Pediatric dental checkups, Emergency dental care tips, Dental phobia solutions, Bruxism treatment, Laser teeth whitening, Digital X,ray benefits, Preventing oral infections, Fluoride for strong teeth, Dental cleanings and exams, Dental implant benefits, Affordable orthodontics, Invisalign advantages, Cosmetic dentistry trends, Dental veneer options, Smile restoration, Emergency dental procedures, Wisdom tooth pain relief, Comprehensive oral exams, Dental bridge maintenance, Pediatric oral hygiene, Gum disease prevention, Root canal therapy details, Dental anxiety management, Oral cancer awareness, Periodontal disease stages, Tooth,colored fillings, Clear aligner maintenance, Dental technology updates, Holistic oral care, Dental restoration options, Dental emergency preparedness, Pediatric dental emergencies, Orthodontic treatment choices, Kizito Alex, Nninda Alex, Nninda Alex Kizito, Matsiko Bob, Dental clinic open now, Dental clinic near me, Dental clinic open Sunday, Dental clinic open on weekends">
	<title> {{ config('app.name') }} | @yield('title')</title>
	<link rel="shortcut icon" href="{{ asset('images/fav.png') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fontawsom-all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/testimonial/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/testimonial/css/owl.theme.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
	<style>
		.dropbtn {
		  background-color: #04AA6D;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
		}

		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f1f1f1;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		}

		.dropdown-content a:hover {background-color: #ddd;}
		.dropdown:hover .dropdown-content {display: block;}
		.dropdown:hover .dropbtn {background-color: #3e8e41;}
	</style>

    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga4.measurementId') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ config('services.ga4.measurementId') }}');
    </script>

</head>

<body style="color:rgb(97, 96, 96);">
