<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "@id":"#website",
        "url": "{{url()->to('/')}}",
        "name":"{[site_name]}",
        "alternateName":"{[alternate_name]}",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{{url()->to(\VRoute::get("search"))}}?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
</script>
@if (isset($currentItem) && is_object($currentItem) && method_exists($currentItem,'getTable'))
    @if ($currentItem->getTable() == 'news')
        <script type="application/ld+json">
            /*<![CDATA[*/{
                "@context": "https://schema.org",
                "@type": "NewsArticle",
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id": "{{url()->current().'/'}}"
                },
                "headline": "{{Support::show($currentItem,'seo_title')}}",
                "description": "{{Support::show($currentItem,'seo_des')}}",
                "image": [
                    "{{url()->to('/').'/'}}{%IMGV2.currentItem.img.-1%}"
                ],
                "author": {
                    "@type": "Person",
                    "name": "{[site_name]}"
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "{[site_name]}",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "{{url()->to('/').'/'}}{Ilogo.imgI}"
                    }
                },
                "datePublished": "{{Support::showDate($currentItem->time_published,'Y-m-d H:i:s')}}",
                "dateModified": "{{Support::showDate($currentItem->updated_at,'Y-m-d H:i:s')}}"
            }/*]]>*/
        </script>
    @endif
@endif
{{-- <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "@id":"{{url()->to('/')}}",
        "priceRange":"$$",
        "brand":"Bệnh viện Đa khoa Phương Đông",
        "image":"{{url()->to('/').'/'}}{Ilogo.imgI}",
        "name" : "Bệnh viện Đa khoa Phương Đông",
        "description":"Bệnh viện đa khoa Phương Đông xây dựng theo mô hình Bệnh viện Khách sạn. Hội tụ đội ngũ chuyên gia, bác sĩ đầu ngành giàu kinh nghiệm hướng tới mục tiêu chăm sóc sức khỏe toàn diện và hảo hảo.",
        "telephone": "+84{[hotline]}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "{[address]}",
            "addressLocality": "Hà Nội",
            "addressRegion": "Vietnam"
        }
    }
</script> --}}
<script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Hospital",
    "@id":"{{url()->to('/')}}",
    "image":"{{url()->to('/').'/'}}{Ilogo.imgI}",
    "name" : "{[site_name]}",
    "slogan":"{[slogan]}",
    "telephone": "+84{[hotline]}",
    "openingHours": "Mo-Su 00:00-24:00",
    "ContactPoint": {
        "telephone": "+84{[hotline]}",
        "contactType": "sales",
        "contactOption": "TollFree",
        "areaServed": "VN"
    },
    "sameAs":[
            "{[facebook]}",
            "{[youtube]}"
        ]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalOrganization",
        "name": "{[site_name]}",
        "alternateName": "{[alternate_name]}",
        "url": "{{url()->to('/')}}",
        "logo": "{{url()->to('/').'/'}}{Ilogo.imgI}",
        "sameAs":[
            "{[facebook]}",
            "{[youtube]}"
        ]
    }
</script>