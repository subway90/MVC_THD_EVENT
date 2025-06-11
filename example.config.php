<?php

const URL = 'http://localhost/';
const URL_ADMIN = URL . 'admin/';
const URL_STORAGE = URL . "assets/file/";


const WEB_NAME = 'THD Events';
const WEB_LOGO = URL_STORAGE . 'system/thd_event_logo.png';
const WEB_FAVICON = URL_STORAGE . 'system/thd_event_favicon.png';
const WEB_ADDRESS = '69 Hoàng Quốc Việt, P. Nghĩa Đô, Q. Cầu Giấy, Hà Nội.';
const WEB_HOTLINE = '024 2269 2020';
const WEB_EMAIL = 'sales@thdtravel.com.vn';
const WEB_DESCRIPTION = 'Công Ty TNHH Du Lịch và Sự Kiện THD';

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = '';

const TOAST_TIME = 1500;

const LIMIT_SIZE_FILE = 4; // đơn vị MB (megabyte)

const DEFAULT_IMAGE = URL_STORAGE.'system/thd_event_logo.png';
const DEFAULT_AVATAR = URL_STORAGE.'system/defaut_avatar.png';

const ARR_S_1 = [
    [
        'name' => 'Sự kiện trọn gói',
        'img' => 'service/ZH__8352.png',
    ],
    [
        'name' => 'Đoàn thể doanh nghiệp',
        'img' => 'service/ZH__8352.png',
    ],
    [
        'name' => 'Lễ kỷ niệm thành lập công ty',
        'img' => 'service/ADT_0713.png',
    ],
    [
        'name' => 'Tiệc tri ân khách hàng',
        'img' => 'service/ZH__8352.png',
    ],
    [
        'name' => 'Lễ khởi công',
        'img' => 'service/ZH__8352.png',
    ],
    [
        'name' => 'Lễ khánh thành',
        'img' => 'service/DSC02916.png',
    ],
    [
        'name' => 'Khai trương',
        'img' => 'service/ZH__8352.png',
    ],
    [
        'name' => 'Hội nghị hội thảo',
        'img' => 'service/TROC0897.png',
    ],
    [
        'name' => 'Lễ khởi công',
        'img' => 'service/ZH__8352.png',
    ],
    [
        'name' => 'Lễ khánh thành',
        'img' => 'service/DSC02916.png',
    ],
    [
        'name' => 'Khai trương',
        'img' => 'service/ZH__8352.png',
    ],
    [
        'name' => 'Hội nghị hội thảo',
        'img' => 'service/TROC0897.png',
    ],

];

const ARR_S_2 = [
    [
        'name' => 'Teambuilding Amazing Race',
        'img' => 'service/ATM81879.png',
    ],
    [
        'name' => 'Teambuilding Bãi biển',
        'img' => 'service/ZTH_8871.png',
    ],
    [
        'name' => 'Teambuilding học sinh',
        'img' => 'service/ktr.png',
    ],
    [
        'name' => 'Teambuilding Resort',
        'img' => 'service/F (29).png',
    ],
    [
        'name' => 'Ngày hội thể thao',
        'img' => 'service/NTT_1771.png',
    ],
    [
        'name' => 'Teambuilding Quân đội',
        'img' => 'service/ktr (1).png',
    ],
    [
        'name' => 'Ngày hội thể thao',
        'img' => 'service/NTT_1771.png',
    ],
    [
        'name' => 'Teambuilding Quân đội',
        'img' => 'service/ktr (1).png',
    ],
];

const ARR_S_3 = [
    [
        'name' => 'MC Dẫn Chương trình/VJ',
        'img' => 'service/DSC05260.png',
    ],
    [
        'name' => 'Thuê Ca sĩ/ Vũ đoàn',
        'img' => 'service/NHD-278.png',
    ],
    [
        'name' => 'Thuê Lân Sư Rồng',
        'img' => 'service/0T6A7137.png',
    ],
    [
        'name' => 'Thuê PG - PP - Người mẫu',
        'img' => 'service/NHD-189.png',
    ],
];

const ARR_S_4 = [
    [
        'name' => 'Thuê Âm thanh - Ánh sáng',
        'img' => 'service/z6633267741541_882daa42321a13ea22a9cf334e084c0a.png',
    ],
    [
        'name' => 'Thuê đồ teambuilding ',
        'img' => 'service/ZTH_8634.png',
    ],
    [
        'name' => 'Thuê sân khấu',
        'img' => 'service/0T6A7137.png',
    ],
    [
        'name' => 'Decor sân khấu - văn phòng',
        'img' => 'service/A.png',
    ],
];

const ARR_P = [
    [
        'video' => "https://www.youtube.com/embed/jdXABInZDJY",
        'title' => "THD EVENT | AGENCY FOR BESPOKE EVENT",
        'desc' => "Công ty TNHH Du lịch & Sự kiện THD x BESPOKE EVENT",
    ],
    [
        'video' => "https://www.youtube.com/embed/69P60BsZRRs",
        'title' => "Đại hội thể thao - SEOV SPORT DAY 2023",
        'desc' => "SEOV | ĐẠI HỘI THỂ THAO | SEOV SPORT DAY 2023 | THD EVENT",
    ],
    [
        'video' => "https://www.youtube.com/embed/7CiwnBWEEqU",
        'title' => "GALA DINNER KỶ NIỆM 21 NĂM THÀNH LẬP CEN GROUP",
        'desc' => "Tổ chức sự kiện gala dinner kỷ niệm 21 năm thành lập Cengroup ngày 14/10/2023.",
    ],
    [
        'video' => "https://www.youtube.com/embed/Dr8wenJxHCQ",
        'title' => "DU LỊCH TEAM BUILDING HÈ 2023 | HAWAII PARTY 2023",
        'desc' => "Chương trình du lịch teambuilding hè 2023 ý nghĩa của Công ty cổ phần Oristar tại Hạ Long",
    ],
    [
        'video' => "https://www.youtube.com/embed/2-OAPYMJCnk",
        'title' => "Hội nghị khách hàng VitaDairy 15.07.2019",
        'desc' => "Tổ chức Hội nghị khách hàng VitaDairy 15.07.2019 x Hoabinh Media",
    ],
    [
        'video' => "https://www.youtube.com/embed/SJI8KpRWXyE",
        'title' => "Teambuilding 4.0 - Samsung Display Vietnam SDV - Ahouse Mê Linh 2020",
        'desc' => "Chương trình Workshop của Samsung Display Vietnam tại AHouse - Mê Linh Hà Nội.",
    ],
    [
        'video' => "https://www.youtube.com/embed/kCfhLszQgIc",
        'title' => "TSỰ KIỆN KHAI TRƯƠNG VĂN PHÒNG ĐẠI DIỆN ON VIỆT NAM",
        'desc' => "VP ON Việt Nam - một trong những nhà sản xuất và phân phối giày và đồ dùng thể thao lớn nhất thế giới tại Hà Nội.",
    ],
    
];

const ARR_B_C = [
    [
        'img' => 'brand_customers/cenland.png'
    ],
    [
        'img' => 'brand_customers/deheus.png'
    ],
    [
        'img' => 'brand_customers/hgs.png'
    ],
    [
        'img' => 'brand_customers/honda.png'
    ],
    [
        'img' => 'brand_customers/lazada.png'
    ],
    [
        'img' => 'brand_customers/lg.png'
    ],
    [
        'img' => 'brand_customers/mb.png'
    ],
    [
        'img' => 'brand_customers/nijia.png'
    ],
    [
        'img' => 'brand_customers/skypec.png'
    ],
    [
        'img' => 'brand_customers/sunspa.png'
    ],
    [
        'img' => 'brand_customers/tal.png'
    ],
    [
        'img' => 'brand_customers/techcombank.png'
    ],
    [
        'img' => 'brand_customers/toyota.png'
    ],
    [
        'img' => 'brand_customers/viettel.png'
    ],
    [
        'img' => 'brand_customers/viettinbank.png'
    ],
    [
        'img' => 'brand_customers/xanhvillas.png'
    ],
    [
        'img' => 'brand_customers/yida.png'
    ],
    [
        'img' => 'brand_customers/homedy.png'
    ],
];


const ARR_B_P = [
    [
        'img' => 'brand_partners/daewoo.png'
    ],
    [
        'img' => 'brand_partners/dolce.png'
    ],
    [
        'img' => 'brand_partners/flamingo.png'
    ],
    [
        'img' => 'brand_partners/flc.png'
    ],
    [
        'img' => 'brand_partners/inter_c.png'
    ],
    [
        'img' => 'brand_partners/jw.png'
    ],
    [
        'img' => 'brand_partners/mandala.png'
    ],
    [
        'img' => 'brand_partners/melia.png'
    ],
    [
        'img' => 'brand_partners/mh.png'
    ],
    [
        'img' => 'brand_partners/pullman.png'
    ],
    [
        'img' => 'brand_partners/sheraton.png'
    ],
    [
        'img' => 'brand_partners/sunworld.png'
    ],
    [
        'img' => 'brand_partners/vinpearl.png'
    ],
];

const ARR_F = [
    [
        [
            'name' => 'Trần Thị Thu Thảo',
            'brand' => 'brand_customers/cenland.png',
            'name_brand' => 'Cenland chi nhánh quận Bắc Từ Liêm',
            'avatar' => 'avatar/01.png',
            'content' => 'THD Event đã tổ chức sự kiện sân khấu của chúng tôi một cách hoàn hảo! Đội ngũ chuyên nghiệp và nhiệt tình',
        ],
        [
            'name' => 'Trần Phi Long',
            'brand' => 'brand_customers/mb.png',
            'name_brand' => 'Ngân hàng Quân Đội - Thủ đô Hà Nội',
            'avatar' => 'avatar/02.png',
            'content' => 'THD Event đã tổ chức sự kiện của chúng tôi một cách hoàn hảo! Đội ngũ chuyên nghiệp và nhiệt tình',
        ],
        [
            'name' => 'Ngô Thị Thanh Thuỷ',
            'brand' => 'brand_customers/nijia.png',
            'name_brand' => 'Công ty TNHH Nijia',
            'avatar' => 'avatar/03.png',
            'content' => 'Dịch vụ của THD Event vượt xa mong đợi! Từ kế hoạch đến thực hiện đều rất chuyên nghiệp',
        ],
    ],
    [
        [
            'name' => 'Nguyễn Cường',
            'brand' => 'brand_customers/viettel.png',
            'name_brand' => 'Dịch vụ CSKH Vietel quận Thanh Xuân',
            'avatar' => 'avatar/04.png',
            'content' => 'Địa điểm tổ chức sự kiện của THD rất đẹp và thuận tiện. Khách mời đều hài lòng!',
        ],
        [
            'name' => 'Lê Thị Thuý Vi',
            'brand' => 'brand_customers/skypec.png',
            'name_brand' => 'Skypec chi nhánh quận Nam Từ Liêm',
            'avatar' => 'avatar/05.png',
            'content' => 'Trải nghiệm với THD Event thật tuyệt! Họ lắng nghe và thực hiện đúng mong muốn của chúng tôi.',
        ],
        [
            'name' => 'Đội ngũ Quản lí XanhVillas',
            'brand' => 'brand_customers/xanhvillas.png',
            'name_brand' => 'Công ty dịch vụ Xanh Villas Quảng Ninh',
            'avatar' => 'avatar/06.png',
            'content' => 'Đầu tư vào dịch vụ của THD Event thật xứng đáng. Sự kiện đẳng cấp với giá cả hợp lý!',
        ],
    ],
];

const SLIDE_BANNER = [
    [
        'img' => 'slide_banner/slide_1.webp',
        'link' => '/noi-bat/event-1',
    ],
    [
        'img' => 'slide_banner/slide_2.webp',
        'link' => '/noi-bat/event-2',
    ],
    [
        'img' => 'slide_banner/slide_3.webp',
        'link' => '/noi-bat/event-3',
    ],
];

const ARR_HOT_PLACE = [
    [
        'name' => 'Địa điểm nổi bật 1',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nihil ratione nostrum inventore.',
        'img' => 'content/catalog-pic-1@2x.jpg'
    ],
    [
        'name' => 'Địa điểm nổi bật 2',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nihil ratione nostrum inventore.',
        'img' => 'content/catalog-pic-2@2x.jpg'
    ],
    [
        'name' => 'Địa điểm nổi bật 3',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nihil ratione nostrum inventore.',
        'img' => 'content/catalog-pic-3@2x.jpg'
    ],
    [
        'name' => 'Địa điểm nổi bật 4',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nihil ratione nostrum inventore.',
        'img' => 'content/catalog-pic-4@2x.jpg'
    ],
    [
        'name' => 'Địa điểm nổi bật 5',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nihil ratione nostrum inventore.',
        'img' => 'content/catalog-pic-5@2x.jpg'
    ],
    [
        'name' => 'Địa điểm nổi bật 6',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nihil ratione nostrum inventore.',
        'img' => 'content/catalog-pic-6@2x.jpg'
    ],
    [
        'name' => 'Địa điểm nổi bật 7',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nihil ratione nostrum inventore.',
        'img' => 'content/catalog-pic-7@2x.jpg'
    ],
    [
        'name' => 'Địa điểm nổi bật 8',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nihil ratione nostrum inventore.',
        'img' => 'content/catalog-pic-2@2x.jpg'
    ],
];

const ARR_COMPARE = [
    [
        'img' => 'room/1.jpg',
        'name' => 'Orchid By Wyndham Halong Ocean Park',
    ],
    [

        'img' => 'room/2.jpg',
        'name' => 'Villa By Wyndham Halong',
    ],
    [
        'img' => 'room/3.jpg',
        'name' => 'Resort By Wyndham Halong ',
    ],
    
];