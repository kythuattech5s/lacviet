<?php
return [
    'url' => 'cmrs/source/binh-luan',
    'repUrl' => 'cmrs/source/tra-loi-binh-luan',
    'source' => 'binh-luan',

    //Thêm vào chi tiết của cái được đánh giá
    'addDetail' => false,

    // Không cần đăng nhập để đánh giá
    'noLogin' => true,

    // Có form bình luận
    'hasForm' => true,

    // Có hiển thị điểm và đánh giá chung
    'hasShowTotal' => false,

    //Có cấp độ của sao
    'hasLabel' => false,

    //Có bộ lọc và sắp xếp
    'hasFilter' => false,

    //[ONE, TWO, THREE]
    'style' => 'THREE',

    'hasAvatarByName' => true,

    // Có đánh giá
    'hasRating' => true,

    // Có trả lời
    'hasRep' => true,

    // Có tải lên ngay
    'active' => 1,
    // Có thích
    'hasLike' => false,

    // Có hình ảnh đại diện
    'hasAvatar' => false,

    //Có số bình luận chi tiết sản phẩm
    'hasCount' => false,

    //Có sắp xếp ngoài chi tiết sản phẩm
    'hasFILE' => false,

    // 'Bạn cần phải mua hàng để đánh giá'
    'checkOrderDone' => false,

    // Comment hiển thị sau cùng
    'insertAfter' => false,
    // Cấu hình cho các trường

    // Tài khoản
    'checkUser' => false,


    'fields' => [
        'hasOrderId' => false,
        'hasImages' => true,
    ],

    'checkShop' => false,
    'showRating' => false,

    'form_type' => 'TWO',
    'isPaginate' => true,
];
