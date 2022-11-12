<sitemap>
    @if (! empty($url['loc']))
        <loc>{{ url($url['loc']) }}</loc>
    @endif
    @if (! empty($url['lastmod']))
        <lastmod>{{ $url['lastmod'] }}</lastmod>
    @endif
    @if (! empty($url['priority']))
        <priority>{{ $url['priority'] }}</priority>
    @endif
    @if (! empty($url['changefreq']))
        <changefreq>{{ $url['changefreq'] }}</changefreq>
    @endif
</sitemap>
