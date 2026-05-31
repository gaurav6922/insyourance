<div class="calculator-hero breadcrumb-wrap">
	<div class="calculator-hero__inner" style="background-image: url('{{ $image }}');">
		<div class="calculator-hero__content">
			<div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
				<h1 class="insul-title">{{ $title }}</h1>
				<div class="breadcrumb-listItem">
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" title="Go to Home." href="{{ url('/') }}" class="home">
							<span property="name">Home</span>
						</a>
						<meta property="position" content="1">
					</span>
					&gt;
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" title="Go to Services." href="{{ url('/our-service-01') }}" class="archive post-insul_service-archive">
							<span property="name">Services</span>
						</a>
						<meta property="position" content="2">
					</span>
					&gt;
					<span property="itemListElement" typeof="ListItem">
						<span property="name" class="post post-insul_service current-item">{{ $title }}</span>
						<meta property="url" content="{{ $url }}">
						<meta property="position" content="3">
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
