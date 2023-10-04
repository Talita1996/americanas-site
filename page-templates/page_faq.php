<?php /* Template Name: FAQ */ 

if ( ! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); 

$tabs_titles = array(
    array(
        'title' => 'a americanas marketplace',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'categoria' => 'a-americanas-marketplace',
        'id' => 'a-americanas-marketplace',
        'icon' => '<svg width="79" height="61" viewBox="0 0 79 61" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="loja-f&#195;&#173;sica_2" clip-path="url(#clip0_1081_8096)">
    <g id="Group">
    <g id="Group_2">
    <path id="Vector" d="M49.8515 58.6421H45.8124V41.6042H32.887V58.6421H28.7744V37.565H49.8515V58.6421Z" fill="#FBD1F6"/>
    </g>
    <g id="Group_3">
    <path id="Vector_2" d="M27.1197 1.02112L18.3711 24.7205L22.2291 26.1447L30.9778 2.44532L27.1197 1.02112Z" fill="#FBD1F6"/>
    </g>
    <g id="Group_4">
    <path id="Vector_3" d="M53.3222 2.16642L49.333 3.1662L55.046 25.9618L59.0352 24.962L53.3222 2.16642Z" fill="#FBD1F6"/>
    </g>
    <g id="Group_5">
    <path id="Vector_4" d="M37.4694 1.77104L37.3359 25.492L41.4485 25.5151L41.582 1.79418L37.4694 1.77104Z" fill="#FBD1F6"/>
    </g>
    <g id="Group_6">
    <path id="Vector_5" d="M65.9349 30.5883H61.8223V44.6152H65.9349V30.5883Z" fill="#FBD1F6"/>
    </g>
    <g id="Group_7">
    <path id="Vector_6" d="M65.935 60.625H12.6914V22.5099H63.8787V26.6226H16.804V56.5858H61.8224V50.1966H65.935V60.625Z" fill="#FBD1F6"/>
    </g>
    <g id="Group_8">
    <path id="Vector_7" d="M65.9349 24.5663H61.8223V30.5883H65.9349V24.5663Z" fill="#FBD1F6"/>
    </g>
    <g id="Group_9">
    <path id="Vector_8" d="M78.4192 26.6226H0.5L13.4253 0.625H65.4939L78.4192 26.6226ZM7.10955 22.5099H71.8831L62.9969 4.73761H15.9957L7.10955 22.5099Z" fill="#FBD1F6"/>
    </g>
    </g>
    </g>
    <defs>
    <clipPath id="clip0_1081_8096">
    <rect width="77.9192" height="60" fill="white" transform="translate(0.5 0.625)"/>
    </clipPath>
    </defs>
    </svg>
    '
    ),
    array(
        'title' => 'cadastro e requisitos',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'categoria' => 'cadastro-e-requisitos',
        'id' => 'tab-two',
        'icon' => '<svg width="79" height="61" viewBox="0 0 79 61" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="computador_2" clip-path="url(#clip0_1081_8120)">
        <g id="Group">
        <path id="Vector" d="M69.776 42.3771V34.7308H66.8305V41.1473H11.8219V3.89773H63.3942H63.9297H66.8305V27.6895H69.776V0.625H63.9297H63.3942H8.87647V42.3969L0.673828 60.625H78.4338L69.776 42.3771ZM11.2596 44.42H67.4107L73.5515 57.3523H49.8897L48.0242 50.9952H31.5743L29.2447 57.3523H5.44011L11.2596 44.42ZM46.7925 57.3523H32.4223L33.5558 54.268H45.891L46.7925 57.3523Z" fill="#FF0023"/>
        <path id="Vector_2" d="M61.9216 35.5242V30.7837V30.0002V9.10434H17.1953V35.5242H61.9216ZM20.0158 12.2382H59.1011V29.9903V30.7738V32.3804H20.0158V12.2382Z" fill="#FF0023"/>
        </g>
        </g>
        <defs>
        <clipPath id="clip0_1081_8120">
        <rect width="77.76" height="60" fill="white" transform="translate(0.673828 0.625)"/>
        </clipPath>
        </defs>
        </svg>
        
    '
    ),
    array(
        'title' => 'custos e pagamentos',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'categoria' => 'custos-e-pagamentos',
        'id' => 'tab-three',
        'icon' => '<svg width="79" height="61" viewBox="0 0 79 61" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="finan&#195;&#167;as_2" clip-path="url(#clip0_1081_8130)">
    <g id="Vector">
    <path d="M65.2845 60.625H0.5V19.7629H65.2845V37.423H73.9741V4.76293H17.8017V15.9206H13.5345V0.625H78.319V41.4871H60.9397V23.9009H4.84483V56.561H60.9397V45.1078H65.2845V60.625Z" fill="#FF0023"/>
    <path d="M27.9655 44.2949C27.9655 45.625 28.2759 46.7334 28.8966 47.4723C29.5172 48.2851 30.6034 48.6546 32.0776 48.7284V41.2654C31.2241 41.0437 30.2931 40.7482 29.4397 40.4526C28.5862 40.157 27.8103 39.7137 27.1121 39.1964C26.4138 38.6792 25.8707 38.0881 25.4052 37.2752C24.9397 36.5363 24.7845 35.5757 24.7845 34.4674C24.7845 33.5068 25.0172 32.6201 25.4052 31.8812C25.7931 31.1422 26.3362 30.4772 27.0345 30.0339C27.7328 29.5166 28.5086 29.1472 29.3621 28.8516C30.2155 28.556 31.1466 28.4821 32.1552 28.4821V26.1176H33.5517V28.4821C34.4828 28.4821 35.4138 28.6299 36.2672 28.8516C37.1207 29.0733 37.8966 29.4427 38.5172 29.96C39.1379 30.4772 39.681 31.0684 40.069 31.8073C40.4569 32.5462 40.6121 33.4329 40.6121 34.4674H36.8879C36.8103 33.4329 36.5776 32.6201 36.0345 32.1028C35.4914 31.5117 34.6379 31.29 33.4741 31.29V37.7925C34.4052 38.0142 35.4138 38.3097 36.3448 38.6792C37.2759 38.9748 38.1293 39.4181 38.8276 39.9353C39.5259 40.4526 40.1465 41.1176 40.5345 41.8565C41 42.5954 41.1552 43.556 41.1552 44.6644C41.1552 45.8467 40.9224 46.8073 40.5345 47.694C40.1465 48.5807 39.6034 49.2457 38.9052 49.8368C38.2069 50.428 37.431 50.7974 36.5 51.1669C35.569 51.4624 34.5603 51.6102 33.4741 51.6841V54.0486H32.0776V51.6841C30.9138 51.6841 29.8276 51.4624 28.8966 51.1669C27.9655 50.8713 27.1121 50.3541 26.4138 49.7629C25.7155 49.1718 25.1724 48.4329 24.7845 47.5462C24.3966 46.6595 24.2414 45.625 24.2414 44.5166H27.9655V44.2949ZM32.0776 31.2161C30.9138 31.2161 29.9828 31.4378 29.3621 31.8812C28.7414 32.3984 28.431 33.1373 28.431 34.2457C28.431 34.7629 28.5086 35.1324 28.7414 35.5018C28.9741 35.8713 29.2069 36.1669 29.5948 36.3885C29.9052 36.6102 30.2931 36.8319 30.7586 36.9797C31.2241 37.1275 31.6121 37.2752 32.0776 37.3491V31.2161ZM33.4741 48.7284C34.6379 48.6546 35.569 48.359 36.3448 47.7679C37.1207 47.1767 37.431 46.29 37.431 45.1078C37.431 44.5166 37.3534 44.0733 37.1207 43.6299C36.8879 43.1866 36.5776 42.891 36.1897 42.6693C35.8017 42.3738 35.4138 42.1521 34.9483 42.0043C34.4828 41.8565 34.0172 41.7087 33.4741 41.561V48.7284Z" fill="#FF0023"/>
    </g>
    </g>
    <defs>
    <clipPath id="clip0_1081_8130">
    <rect width="77.819" height="60" fill="white" transform="translate(0.5 0.625)"/>
    </clipPath>
    </defs>
    </svg>
    '
    ),
    array(
        'title' => 'vendas e produtos',
        'subtitle' => 'subtitulo',
        'categoria' => 'vendas-e-produtos',
        'id' => 'tab-four',
        'icon' => '<svg width="79" height="61" viewBox="0 0 79 61" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="e-commerce_2">
    <g id="Vector">
    <path d="M24.1209 0.605713L14.908 16.7136L18.2738 18.8909L27.4867 2.78301L24.1209 0.605713Z" fill="#FF0023"/>
    <path d="M54.2214 0.695697L50.8603 2.88096L60.0335 18.8386L63.3946 16.6533L54.2214 0.695697Z" fill="#FF0023"/>
    <path d="M56.9267 21.2632L48.0637 59.24L51.8873 60.2493L60.7503 22.2724L56.9267 21.2632Z" fill="#FF0023"/>
    <path d="M23.5348 21.4262L19.6497 22.1187L25.4406 58.8614L29.3257 58.1689L23.5348 21.4262Z" fill="#FF0023"/>
    <path d="M37.4808 21.6912L37.3425 59.6962L41.2819 59.7124L41.4202 21.7074L37.4808 21.6912Z" fill="#FF0023"/>
    <path d="M72.3204 26.8122L66.7487 44.7092L70.4884 46.026L76.0601 28.1289L72.3204 26.8122Z" fill="#FF0023"/>
    <path d="M65.9223 60.6443H12.881L0.5 20.9186H78.2329L75.9818 28.1754L72.3238 26.8288L72.8866 25.0333H5.91668L15.6948 56.4547H63.1084L64.656 51.3675L68.3844 52.6393L65.9223 60.6443Z" fill="#FF0023"/>
    </g>
    </g>
    </svg>
    '
    ),
    array(
        'title' => 'entrega e logistica',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'categoria' => 'entrega-e-logistica',
        'id' => 'tab-five',
        'icon' => '<svg width="79" height="61" viewBox="0 0 79 61" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="log&#195;&#173;stica_2" clip-path="url(#clip0_1081_5925)">
    <g id="Vector">
    <path d="M78.2825 53.0329H66.054V48.9051H73.9484V38.0697L62.8808 33.7208L59.6302 17.3572H41.597V4.75276H14.8182V0.625H45.8538V13.2294H63.1904L66.6732 30.7724L78.2825 35.3424V53.0329Z" fill="#FF0023"/>
    <path d="M11.9545 53.0329H0.5V0.625H8.39435V4.75276H4.83415V48.9051H11.9545V53.0329Z" fill="#FF0023"/>
    <path d="M48.4853 48.9051H26.8145V53.0329H48.4853V48.9051Z" fill="#FF0023"/>
    <path d="M57.6179 60.625C52.355 60.625 48.0209 56.4972 48.0209 51.4849C48.0209 46.4727 52.355 42.3449 57.6179 42.3449C62.8808 42.3449 67.215 46.4727 67.215 51.4849C67.215 56.5709 62.9582 60.625 57.6179 60.625ZM57.6179 46.4727C54.6769 46.4727 52.355 48.7577 52.355 51.4849C52.355 54.2122 54.7543 56.4972 57.6179 56.4972C60.4816 56.4972 62.8808 54.2122 62.8808 51.4849C62.8808 48.7577 60.559 46.4727 57.6179 46.4727Z" fill="#FF0023"/>
    <path d="M19.3845 60.625C14.1216 60.625 9.78747 56.4972 9.78747 51.4849C9.78747 46.4727 14.1216 42.3449 19.3845 42.3449C24.6474 42.3449 28.9816 46.4727 28.9816 51.4849C28.9816 56.5709 24.6474 60.625 19.3845 60.625ZM19.3845 46.4727C16.4435 46.4727 14.1216 48.7577 14.1216 51.4849C14.1216 54.2122 16.5209 56.4972 19.3845 56.4972C22.2482 56.4972 24.6474 54.2122 24.6474 51.4849C24.6474 48.7577 22.3256 46.4727 19.3845 46.4727Z" fill="#FF0023"/>
    </g>
    </g>
    <defs>
    <clipPath id="clip0_1081_5925">
    <rect width="77.7825" height="60" fill="white" transform="translate(0.5 0.625)"/>
    </clipPath>
    </defs>
    </svg>
    '
    ),
    array(
        'title' => 'plataforma de vendas',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'categoria' => 'plataforma-de-vendas',
        'id' => 'tab-six',
        'icon' => '<svg width="67" height="60" viewBox="0 0 67 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="tecnologia_2" clip-path="url(#clip0_1081_7598)">
        <g id="Group">
        <path id="Vector" d="M35.2476 2.78729H31.5508V17.4572H35.2476V2.78729Z" fill="#FF0023"/>
        </g>
        <g id="Group_2">
        <path id="Vector_2" d="M42.3755 0H24.3535V4.10758H42.3755V0Z" fill="#FF0023"/>
        </g>
        <g id="Group_3">
        <path id="Vector_3" d="M60.3328 60H24.3548V55.8924H56.636V19.511H10.0957V55.8924H16.5651V60H6.46484V15.4034H60.3328V60Z" fill="#FF0023"/>
        </g>
        <g id="Group_4">
        <path id="Vector_4" d="M26.5328 29.4132H22.8359V39.9022H26.5328V29.4132Z" fill="#FF0023"/>
        </g>
        <g id="Group_5">
        <path id="Vector_5" d="M43.9605 29.4132H40.2637V39.9022H43.9605V29.4132Z" fill="#FF0023"/>
        </g>
        <g id="Group_6">
        <path id="Vector_6" d="M66.3394 28.0929H62.6426V47.3105H66.3394V28.0929Z" fill="#FF0023"/>
        </g>
        <g id="Group_7">
        <path id="Vector_7" d="M4.15385 28.0929H0.457031V47.3105H4.15385V28.0929Z" fill="#FF0023"/>
        </g>
        </g>
        <defs>
        <clipPath id="clip0_1081_7598">
        <rect width="65.8166" height="60" fill="white" transform="translate(0.457031)"/>
        </clipPath>
        </defs>
        </svg>
        '
    ),
    array(
        'title' => 'campanhas e promoções',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'categoria' => 'campanhas-e-promoções',
        'id' => 'tab-seven',
        'icon' => '<svg width="79" height="61" viewBox="0 0 79 61" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="publicidade_2" clip-path="url(#clip0_1081_7619)">
    <g id="Group">
    <g id="Group_2">
    <path id="Vector" d="M62.5571 60.625L6.66016 45.1433V16.0378L62.5571 0.625V43.0103H58.2983V5.78555L10.919 18.8589V42.3222L58.2983 55.4644V49.2718H62.5571V60.625Z" fill="#FF0023"/>
    </g>
    <g id="Group_3">
    <path id="Vector_2" d="M4.75881 22.1617H0.5V39.0195H4.75881V22.1617Z" fill="#FF0023"/>
    </g>
    <g id="Group_4">
    <path id="Vector_3" d="M31.5288 60.5562H12.8965V45.625H17.1553V56.7718H27.346V49.3406H31.5288V60.5562Z" fill="#FF0023"/>
    </g>
    <g id="Group_5">
    <path id="Vector_4" d="M78.0705 28.6984H69.6289V32.5516H78.0705V28.6984Z" fill="#FF0023"/>
    </g>
    <g id="Group_6">
    <path id="Vector_5" d="M71.2106 41.6427L68.1992 44.3673L74.1683 49.7679L77.1797 47.0433L71.2106 41.6427Z" fill="#FF0023"/>
    </g>
    <g id="Group_7">
    <path id="Vector_6" d="M74.139 11.0254L68.1699 16.426L71.1813 19.1506L77.1504 13.75L74.139 11.0254Z" fill="#FF0023"/>
    </g>
    </g>
    </g>
    <defs>
    <clipPath id="clip0_1081_7619">
    <rect width="77.5712" height="60" fill="white" transform="translate(0.5 0.625)"/>
    </clipPath>
    </defs>
    </svg>
    '
    ),
    array(
        'title' => 'americanas empresas',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'categoria' => 'americanas-empresas',
        'id' => 'tab-eight',
        'icon' => '<svg width="79" height="61" viewBox="0 0 79 61" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="mercado_2" clip-path="url(#clip0_1081_5843)">
    <path id="Vector" d="M78.0182 7.08033H61.7283V11.5184H71.9705L66.8244 32.0947H21.0221L17.7291 11.5184H54.9669V7.08033H17.0154L15.9761 0.625H0.5V5.06304H11.8191L18.8309 48.7518H25.5798C24.5906 49.9852 24.0021 51.5184 24.0021 53.1668C24.0021 57.2821 27.6333 60.625 32.1033 60.625C36.5733 60.625 40.2045 57.2821 40.2045 53.1668C40.2045 51.5184 39.616 49.9968 38.6268 48.7518H49.3574C48.3682 49.9852 47.7797 51.5184 47.7797 53.1668C47.7797 57.2821 51.4109 60.625 55.8809 60.625C60.3509 60.625 63.9821 57.2821 63.9821 53.1668C63.9821 51.5184 63.3936 49.9968 62.4044 48.7518H68.7401V44.3138H22.9879L21.7358 36.5328H70.6558L78.0182 7.08033ZM32.1158 56.187C30.3003 56.187 28.8228 54.8267 28.8228 53.1553C28.8228 51.4838 30.3003 50.1236 32.1158 50.1236C33.9314 50.1236 35.4089 51.4838 35.4089 53.1553C35.4089 54.8267 33.9314 56.187 32.1158 56.187ZM55.9059 56.187C54.0904 56.187 52.6129 54.8267 52.6129 53.1553C52.6129 51.4838 54.0904 50.1236 55.9059 50.1236C57.7215 50.1236 59.199 51.4838 59.199 53.1553C59.199 54.8267 57.7215 56.187 55.9059 56.187Z" fill="#FF0023"/>
    </g>
    <defs>
    <clipPath id="clip0_1081_5843">
    <rect width="77.5182" height="60" fill="white" transform="translate(0.5 0.625)"/>
    </clipPath>
    </defs>
    </svg>
    '
    )
    );

get_template_part( 'page-templates/faq/faq', null, array( 'tabs_titles' => $tabs_titles ));

get_footer();

?>