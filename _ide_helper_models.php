<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Banner
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $link Link
 * @property string|null $img Ảnh
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property int|null $group Nhóm
 * @property int|null $nofollow Kích hoạt
 * @property string|null $time_show Thời gian đăng bài
 * @property string|null $time_public Thời gian đăng bài
 * @property int|null $create_by
 * @property int|null $update_by
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereNofollow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereTimePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereTimeShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 */
	class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BannerGdn
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $link Link
 * @property string|null $img Ảnh
 * @property int|null $group Nhóm
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property int|null $use_code Sử dụng code
 * @property string|null $banner_content Mã banner
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property int|null $nofollow Kích hoạt
 * @property string|null $time_show Thời gian đăng bài
 * @property string|null $time_public Thời gian đăng bài
 * @property int|null $create_by
 * @property int|null $update_by
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereBannerContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereNofollow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereTimePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereTimeShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerGdn whereUseCode($value)
 */
	class BannerGdn extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BaseModel
 *
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 */
	class BaseModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BodyLookup
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property string|null $publish_by Đăng bởi
 * @property int|null $ord Sắp xếp
 * @property int|null $count_view Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property string|null $imgs_template Ảnh share facebook
 * @property int|null $create_by
 * @property int|null $update_by
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereImgsTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup wherePublishBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BodyLookup whereUpdatedAt($value)
 */
	class BodyLookup extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BookApointment
 *
 * @property int $id
 * @property string|null $fullname Họ và tên
 * @property string|null $phone Số điện thoại
 * @property string|null $email Email
 * @property string|null $note Ghi chú
 * @property int|null $status Đã xử lý
 * @property int|null $service_id Đã xử lý
 * @property int|null $act Đã xử lý
 * @property \Illuminate\Support\Carbon|null $created_at Ngày gửi
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $utm_source Nguồn
 * @property string|null $utm_medium Gía trị
 * @property string|null $utm_campaign Chiên dịch
 * @property string|null $utm_content Nội dung
 * @property string|null $utm_term Thời gian
 * @property int|null $update_by Đã xử lý
 * @property int|null $is_read Đã đọc
 * @property int|null $sync_status Đã đọc
 * @property int|null $gender Đã xử lý
 * @property-read \App\Models\Services|null $service
 * @property-read \App\Models\StatusBookApointment|null $statusBookApointment
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereSyncStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereUtmCampaign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereUtmContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereUtmMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereUtmSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointment whereUtmTerm($value)
 */
	class BookApointment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BookApointmentDoctor
 *
 * @property int $id
 * @property int|null $doctor_id Bác sĩ
 * @property string|null $fullname Họ và tên
 * @property string|null $phone Số điện thoại
 * @property string|null $email Email
 * @property string|null $day_book Ngày đặt
 * @property int|null $time_pick Lịch khám
 * @property string|null $time_pick_text Lịch khám
 * @property string|null $note Ghi chú
 * @property int|null $act Đã xử lý
 * @property \Illuminate\Support\Carbon|null $created_at Ngày gửi
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereDayBook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereTimePick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereTimePickText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookApointmentDoctor whereUpdatedAt($value)
 */
	class BookApointmentDoctor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BranchSystem
 *
 * @property int $id
 * @property string|null $name Tên chi nhánh
 * @property string|null $img Ảnh
 * @property int|null $province_id Tỉnh / Thành Phố
 * @property string|null $full_address Địa chỉ đầy đủ
 * @property string|null $phone Số điện thoại
 * @property string|null $open_time Giờ mở của
 * @property string|null $day_word Ngày hoạt động
 * @property string|null $content Mô tả
 * @property int|null $act Kích hoạt
 * @property int|null $ord Sắp xếp
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người cập nhật
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereDayWord($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereFullAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereOpenTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BranchSystem whereUpdatedAt($value)
 */
	class BranchSystem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Certification
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $img Hình ảnh
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Certification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Certification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Certification query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Certification whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certification whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certification whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certification whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certification whereUpdatedAt($value)
 */
	class Certification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Comment
 *
 * @property int $id
 * @property string|null $name Họ tên
 * @property string|null $phone Số điện thoại
 * @property string|null $email User bình luận
 * @property string|null $map_table Bảng map bình luận
 * @property int|null $map_id ID map bình luận
 * @property string|null $content Nội dung bình luận
 * @property int|null $comment_id Comment cha
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $imgs Ảnh bình luận
 * @property int|null $is_read Đã xem
 * @property-read \Illuminate\Database\Eloquent\Collection|Comment[] $childs
 * @property-read int|null $childs_count
 * @property-read \App\Models\News|null $news
 * @property-read \App\Models\Rating|null $rating
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereMapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereMapTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DiseaseLookup
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property string|null $publish_by Đăng bởi
 * @property int|null $ord Sắp xếp
 * @property int|null $count_view Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property string|null $imgs_template Ảnh share facebook
 * @property int|null $create_by
 * @property int|null $update_by
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereImgsTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup wherePublishBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseLookup whereUpdatedAt($value)
 */
	class DiseaseLookup extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\District
 *
 * @property int $id
 * @property int|null $district_id
 * @property string|null $name
 * @property int|null $code
 * @property int|null $type
 * @property int|null $support_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $province_id
 * @property string|null $lat Vĩ độ
 * @property string|null $long Kinh độ
 * @property-read mixed $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Ward[] $wards
 * @property-read int|null $wards_count
 * @method static \Illuminate\Database\Eloquent\Builder|District act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|District query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereSupportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereUpdatedAt($value)
 */
	class District extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Doctor
 *
 * @property int $id
 * @property string|null $name Tên bác sĩ
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $imgs Hình ảnh hoạt động
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $short_content_home Nội dung ngắn
 * @property string|null $content Nội dung
 * @property string|null $content_intro Nội dung
 * @property string|null $position Vị trí làm việc
 * @property string|null $academic_rank Học hàm học vị
 * @property int|null $specialist_id Chuyên khoa
 * @property int|null $ord Sắp xếp
 * @property int|null $home
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by
 * @property int|null $update_by
 * @property int|null $count_view Sắp xếp
 * @property string|null $hotline Vị trí làm việc
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\News[] $news
 * @property-read int|null $news_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Rating[] $ratings
 * @property-read int|null $ratings_count
 * @property-read \App\Models\Specialist|null $specialist
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereAcademicRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereContentIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereHotline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereShortContentHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSpecialistId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 */
	class Doctor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DrugLookup
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property string|null $publish_by Đăng bởi
 * @property int|null $ord Sắp xếp
 * @property int|null $count_view Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property string|null $imgs_template Ảnh share facebook
 * @property int|null $create_by
 * @property int|null $update_by
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereImgsTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup wherePublishBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugLookup whereUpdatedAt($value)
 */
	class DrugLookup extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Equipment
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $link Link
 * @property string|null $short_content Ảnh
 * @property string|null $img Ảnh
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereUpdatedAt($value)
 */
	class Equipment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FileGallery
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property int|null $hot Video nổi bật
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người sửa
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property string|null $file Link video
 * @property int|null $count_view Sắp xếp
 * @property int|null $noindex Kích hoạt
 * @property int|null $nofollow Kích hoạt
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FileGalleryCategory[] $category
 * @property-read int|null $category_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FileGalleryFileGalleryCategory[] $pivot
 * @property-read int|null $pivot_count
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereNofollow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereNoindex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGallery whereYoastScore($value)
 */
	class FileGallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FileGalleryCategory
 *
 * @property int $id
 * @property string|null $name Tên danh mục tin tức
 * @property string|null $slug Đường dẫn
 * @property string|null $img Banner
 * @property string|null $icon Banner
 * @property int|null $parent Danh mục cha
 * @property string|null $content Banner
 * @property string|null $short_content Banner
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người sửa
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FileGallery[] $fileGallery
 * @property-read int|null $file_gallery_count
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryCategory whereYoastScore($value)
 */
	class FileGalleryCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FileGalleryFileGalleryCategory
 *
 * @property int $file_gallery_id Id tin tức
 * @property int $file_gallery_category_id Id danh mục tin tức
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property-read \App\Models\FileGalleryCategory|null $fileGalleryCategory
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryFileGalleryCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryFileGalleryCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryFileGalleryCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryFileGalleryCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryFileGalleryCategory whereFileGalleryCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryFileGalleryCategory whereFileGalleryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileGalleryFileGalleryCategory whereUpdatedAt($value)
 */
	class FileGalleryFileGalleryCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FlashNotification
 *
 * @property int $id
 * @property string|null $title Tên
 * @property string|null $name Tên
 * @property string|null $link Tiêu đề
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashNotification whereUpdatedAt($value)
 */
	class FlashNotification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ForCustomer
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $img Hình ảnh
 * @property string|null $link Đường dẫn
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property int|null $home Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer whereHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForCustomer whereUpdatedAt($value)
 */
	class ForCustomer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HUserOnline
 *
 * @property int $id
 * @property int|null $h_user_id Tài khoản
 * @property string|null $doing Đang làm gì
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property int|null $tab_session Session
 * @property-read mixed $slug
 * @property-read \vanhenry\manager\model\HUser|null $h_user
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|HUserOnline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HUserOnline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|HUserOnline query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|HUserOnline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HUserOnline whereDoing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HUserOnline whereHUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HUserOnline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HUserOnline whereTabSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HUserOnline whereUpdatedAt($value)
 */
	class HUserOnline extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HistoryBegin
 *
 * @property int $id
 * @property string|null $year Năm
 * @property string|null $name Sự kiện
 * @property string|null $content Nội dung
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryBegin whereYear($value)
 */
	class HistoryBegin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ImageGallery
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $slug Đường dẫn
 * @property string|null $link Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $imgs Thư viện hình ảnh
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property int|null $hot Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người sửa
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property int|null $count_view Sắp xếp
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ImageGalleryCategory[] $category
 * @property-read int|null $category_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ImageGalleryImageGalleryCategory[] $pivot
 * @property-read int|null $pivot_count
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery whereYoastScore($value)
 */
	class ImageGallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ImageGalleryCategory
 *
 * @property int $id
 * @property string|null $name Tên danh mục tin tức
 * @property string|null $slug Đường dẫn
 * @property string|null $img Banner
 * @property string|null $icon Banner
 * @property int|null $parent Danh mục cha
 * @property string|null $content Banner
 * @property string|null $short_content Banner
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người sửa
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ImageGallery[] $imageGallery
 * @property-read int|null $image_gallery_count
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory whereYoastScore($value)
 */
	class ImageGalleryCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ImageGalleryImageGalleryCategory
 *
 * @property int $image_gallery_id Id tin tức
 * @property int $image_gallery_category_id Id danh mục tin tức
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property-read \App\Models\ImageGalleryCategory|null $imageGalleryCategory
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryImageGalleryCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryImageGalleryCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryImageGalleryCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryImageGalleryCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryImageGalleryCategory whereImageGalleryCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryImageGalleryCategory whereImageGalleryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryImageGalleryCategory whereUpdatedAt($value)
 */
	class ImageGalleryImageGalleryCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $keyword
 * @property string|null $vi_value
 * @property string|null $en_value
 * @property string|null $note
 * @property int|null $act
 * @property int|null $region
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereEnValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereViValue($value)
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Leadership
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $job Chức vụ
 * @property string|null $img Hình ảnh
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leadership whereUpdatedAt($value)
 */
	class Leadership extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Menu
 *
 * @property int $id
 * @property string|null $link Tiêu đề
 * @property string|null $name Tên
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property int|null $menu_category_id Danh mục menu
 * @property int|null $parent Cha
 * @property string|null $icon Tên
 * @property int|null $nofollow Kích hoạt
 * @property int|null $create_by
 * @property int|null $update_by
 * @property-read \Illuminate\Database\Eloquent\Collection|Menu[] $childs
 * @property-read int|null $childs_count
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereMenuCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereNofollow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereUpdatedAt($value)
 */
	class Menu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MenuSitemap
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $link Đường dẫn
 * @property string|null $icon
 * @property int|null $parent Cha
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read \Illuminate\Database\Eloquent\Collection|MenuSitemap[] $childs
 * @property-read int|null $childs_count
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuSitemap whereUpdatedAt($value)
 */
	class MenuSitemap extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\News
 *
 * @property int $id
 * @property string|null $name Tên tin tức
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property int|null $ord Sắp xếp
 * @property int|null $home
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $hot
 * @property string|null $time_published Thời gian đăng bài
 * @property int|null $editing Đang sửa
 * @property string|null $yoast_score
 * @property int|null $is_draft Nháp
 * @property int|null $trash Thùng rác
 * @property int|null $doctor_id Sắp xếp
 * @property int|null $count_view Sắp xếp
 * @property int|null $like Sắp xếp
 * @property int|null $unlike Sắp xếp
 * @property int|null $video_id Sắp xếp
 * @property string|null $time_show_home Thời gian đăng bài
 * @property string|null $reference_source Nội dung ngắn
 * @property int|null $create_by
 * @property int|null $update_by
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $imgs_template Ảnh share facebook
 * @property string|null $htmls_template Ảnh share facebook
 * @property string|null $same_topic Ảnh share facebook
 * @property int|null $specialist_id Sắp xếp
 * @property int|null $show_global_notify Kích hoạt
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NewsCategory[] $category
 * @property-read int|null $category_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NewsNewsCategory[] $pivot
 * @property-read int|null $pivot_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Rating[] $ratings
 * @property-read int|null $ratings_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NewsTag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereEditing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereHtmlsTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereImgsTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereIsDraft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereLike($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereReferenceSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereSameTopic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereShowGlobalNotify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereSpecialistId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTimePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTimeShowHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTrash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUnlike($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereVideoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereYoastScore($value)
 */
	class News extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NewsCategory
 *
 * @property int $id
 * @property string|null $name Tên danh mục tin tức
 * @property string|null $slug Đường dẫn
 * @property string|null $img Banner
 * @property string|null $icon Banner
 * @property int|null $parent Danh mục cha
 * @property string|null $content Banner
 * @property string|null $short_content Banner
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người sửa
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property int|null $type_slug Đường dẫn
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\News[] $news
 * @property-read int|null $news_count
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereTypeSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereYoastScore($value)
 */
	class NewsCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NewsEditOnline
 *
 * @property int $id
 * @property string|null $session_id ID trình duyệt
 * @property int|null $news_id Bài viết
 * @property int|null $h_user_id Tài khoản
 * @property string|null $ip IP
 * @property int|null $tab_time Thời gian mở tab
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline whereHUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline whereTabTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsEditOnline whereUpdatedAt($value)
 */
	class NewsEditOnline extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NewsHistory
 *
 * @property int $id
 * @property string|null $content_old Nội dung cũ
 * @property string|null $content Nội dung
 * @property int|null $news_id Bài viết
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $type Kiểu
 * @property int|null $h_user_id Người chỉnh sửa
 * @property string|null $reason Lý do sửa
 * @property-read \vanhenry\manager\model\HUser|null $h_users
 * @property-read \App\Models\News|null $news
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory whereContentOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory whereHUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsHistory whereUpdatedAt($value)
 */
	class NewsHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NewsNewsCategory
 *
 * @property int $news_id Id tin tức
 * @property int $news_category_id Id danh mục tin tức
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property-read \App\Models\NewsCategory|null $newsCategory
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsCategory whereNewsCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsCategory whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsCategory whereUpdatedAt($value)
 */
	class NewsNewsCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NewsNewsTag
 *
 * @property int $news_id Id tin tức
 * @property int $news_tag_id Id tag tin tức
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsTag whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsTag whereNewsTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsNewsTag whereUpdatedAt($value)
 */
	class NewsNewsTag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NewsTag
 *
 * @property int $id
 * @property string|null $name Tên tag
 * @property string|null $slug Đường dẫn
 * @property string|null $short_content Ảnh
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người sửa
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property int|null $noindex Kích hoạt
 * @property int|null $nofollow Kích hoạt
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\News[] $news
 * @property-read int|null $news_count
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereNofollow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereNoindex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereYoastScore($value)
 */
	class NewsTag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PageStatic
 *
 * @property int $id
 * @property string|null $name Tên trang
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property int|null $act Kích hoạt
 * @property string|null $layout_show Kiểu hiển thị
 * @property int|null $count Số lượt xem
 * @property int|null $ord Sắp xếp
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property string|null $yoast_score Seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người cập nhật
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $imgs_template Ảnh share facebook
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereImgsTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereLayoutShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageStatic whereYoastScore($value)
 */
	class PageStatic extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Partner
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $link Link
 * @property string|null $phone Link
 * @property string|null $img Ảnh
 * @property string|null $short_content Ảnh
 * @property string|null $content Ảnh
 * @property int|null $ord Sắp xếp
 * @property int|null $create_by Sắp xếp
 * @property int|null $update_by Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereUpdatedAt($value)
 */
	class Partner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Province
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $province_id
 * @property string|null $code
 * @property string|null $lat Vĩ độ
 * @property string|null $long Kinh độ
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BranchSystem[] $branchSystem
 * @property-read int|null $branch_system_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\District[] $district
 * @property-read int|null $district_count
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Province newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Province newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Province query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereUpdatedAt($value)
 */
	class Province extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Question
 *
 * @property int $id
 * @property string|null $name Câu hỏi
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $question Nội dung ngắn
 * @property string|null $answer Nội dung
 * @property int|null $parent Video giới thiệu
 * @property int|null $doctor_id Video giới thiệu
 * @property string|null $customer_name Tin tức liên quan
 * @property string|null $time_ask Tin tức liên quan
 * @property string|null $time_reply Tin tức liên quan
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $age Câu hỏi
 * @property string|null $phone Câu hỏi
 * @property string|null $email Câu hỏi
 * @property int|null $specialists_id Video giới thiệu
 * @property int|null $is_read Đã đọc
 * @property int|null $count_view Sắp xếp
 * @property int|null $create_by
 * @property int|null $update_by
 * @property int|null $frequent
 * @property-read \App\Models\QuestionCategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Rating[] $ratings
 * @property-read int|null $ratings_count
 * @property-read \App\Models\Specialist|null $specialist
 * @method static \Illuminate\Database\Eloquent\Builder|Question act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereFrequent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereSpecialistsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereTimeAsk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereTimeReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuestionCategory
 *
 * @property int $id
 * @property string|null $name Tên danh mục tin tức
 * @property string|null $slug Đường dẫn
 * @property string|null $img Banner
 * @property string|null $icon Banner
 * @property int|null $parent Danh mục cha
 * @property string|null $content Banner
 * @property string|null $short_content Banner
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by
 * @property int|null $update_by
 * @property-read \Illuminate\Database\Eloquent\Collection|QuestionCategory[] $child
 * @property-read int|null $child_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Question[] $question
 * @property-read int|null $question_count
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionCategory whereUpdatedAt($value)
 */
	class QuestionCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QueueEmail
 *
 * @property int $id ID
 * @property string|null $title Tiêu đề email
 * @property string|null $content Nội dung
 * @property string|null $from Gửi từ
 * @property string|null $to_name
 * @property string|null $to Gửi tới
 * @property \Illuminate\Support\Carbon|null $created_at Thời gian tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Thời gian cập nhật
 * @property int|null $status Trạng thái
 * @property int|null $count_error Sồ lần gửi thất bại
 * @property string|null $attach_file Danh sách file đính kèm
 * @property string|null $result Kết quả gửi
 * @property int|null $is_sms Là SMS
 * @property string|null $bcc BCC
 * @property string|null $cc CC
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail query()
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereAttachFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereBcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereCc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereCountError($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereIsSms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereToName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QueueEmail whereUpdatedAt($value)
 */
	class QueueEmail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rating
 *
 * @property int $id
 * @property int|null $comment_id
 * @property int|null $rating
 * @property string|null $map_table Bảng sản phẩm
 * @property int|null $map_id Mã sản phẩm
 * @property int|null $user_id Nguời đánh giá
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property-read \App\Models\Comment|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereMapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereMapTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereUserId($value)
 */
	class Rating extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReasonChoose
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $img Ảnh
 * @property string|null $content Nội dung
 * @property int|null $act Kích hoạt
 * @property int|null $ord Vị trí
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người cập nhật
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày sửa
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReasonChoose whereUpdatedAt($value)
 */
	class ReasonChoose extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RedirectLink
 *
 * @property int $id
 * @property string|null $root_link Link cần chuyển hướng
 * @property string|null $redirect_link Link chuyển hướng
 * @property int|null $type Kiểu chuyển hướng
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property int|null $create_by
 * @property int|null $update_by
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink whereRedirectLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink whereRootLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RedirectLink whereUpdatedAt($value)
 */
	class RedirectLink extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RegisterAdvise
 *
 * @property int $id
 * @property string|null $title Họ và tên
 * @property string|null $fullname Họ và tên
 * @property string|null $phone Số điện thoại
 * @property string|null $email Ngày đặt
 * @property string|null $note Nội dung
 * @property int|null $act Đã xử lý
 * @property \Illuminate\Support\Carbon|null $created_at Ngày gửi
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $utm_source Nguồn
 * @property string|null $utm_medium Gía trị
 * @property string|null $utm_campaign Chiên dịch
 * @property string|null $utm_content Nội dung
 * @property string|null $utm_term Thời gian
 * @property int|null $is_read Đã xem
 * @property string|null $register_address Nơi đăng ký khám
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise query()
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereRegisterAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereUtmCampaign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereUtmContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereUtmMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereUtmSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegisterAdvise whereUtmTerm($value)
 */
	class RegisterAdvise extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceCategory
 *
 * @property int $id
 * @property string|null $name Tên dịch vụ
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $imgs Hình ảnh hoạt động
 * @property string|null $quote Báo giá
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property string|null $video_intro Video giới thiệu
 * @property string|null $list_news Tin tức liên quan
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property int|null $home Hiển thị trang chủ
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $hot Hiển thị trang chủ
 * @property string|null $end_content Nội dung
 * @property string|null $title_relate_new Đường dẫn
 * @property int|null $video_id Sắp xếp
 * @property int|null $create_by
 * @property int|null $update_by
 * @property int|null $is_draft Nháp
 * @property int|null $trash Thùng rác
 * @property int|null $parent Sắp xếp
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property string|null $imgs_template Ảnh share facebook
 * @property int|null $count_view Sắp xếp
 * @property string|null $inject_html Đường dẫn
 * @property int|null $layout_page Nháp
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Services[] $services
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereEndContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereImgsTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereInjectHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereIsDraft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereLayoutPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereListNews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereQuote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereTitleRelateNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereTrash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereVideoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereVideoIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereYoastScore($value)
 */
	class ServiceCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Services
 *
 * @property int $id
 * @property string|null $name Tên dịch vụ
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $imgs Hình ảnh hoạt động
 * @property string|null $quote Báo giá
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property string|null $video_intro Video giới thiệu
 * @property string|null $list_news Tin tức liên quan
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property int|null $home Hiển thị trang chủ
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $hot Hiển thị trang chủ
 * @property string|null $advantages Nội dung
 * @property string|null $title_relate_new Đường dẫn
 * @property int|null $video_id Sắp xếp
 * @property int|null $create_by
 * @property int|null $update_by
 * @property int|null $is_draft Nháp
 * @property int|null $trash Thùng rác
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property int|null $sale Hiển thị trang chủ
 * @property int|null $price Giá ưu đãi
 * @property string|null $sale_link Link ưu đãi
 * @property string|null $sale_title Link ưu đãi
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceCategory[] $category
 * @property-read int|null $category_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServicesServiceCategory[] $pivot
 * @property-read int|null $pivot_count
 * @method static \Illuminate\Database\Eloquent\Builder|Services act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Services newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Services newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Services query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereAdvantages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereIsDraft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereListNews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereQuote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereSaleLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereSaleTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereTitleRelateNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereTrash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereVideoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereVideoIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereYoastScore($value)
 */
	class Services extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServicesServiceCategory
 *
 * @property int $services_id Id dịch vụ
 * @property int $service_category_id Id danh mục dịch vụ
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property-read \App\Models\ServiceCategory|null $serviceCategory
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesServiceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesServiceCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesServiceCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesServiceCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesServiceCategory whereServiceCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesServiceCategory whereServicesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesServiceCategory whereUpdatedAt($value)
 */
	class ServicesServiceCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Specialist
 *
 * @property int $id
 * @property string|null $name Tên tin tức
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $imgs Ảnh
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property int|null $ord Sắp xếp
 * @property int|null $home
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by
 * @property int|null $update_by
 * @property int|null $parent
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property string|null $imgs_template Ảnh share facebook
 * @property int|null $count_view Sắp xếp
 * @property string|null $seo_title_doctor Tiêu đề seo
 * @property string|null $seo_key_doctor Từ khóa seo
 * @property string|null $seo_des_doctor Mô tả seo
 * @property string|null $share_image_facebook_doctor Ảnh share facebook Bác sĩ
 * @property string|null $short_content_doctor Nội dung ngắn
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Doctor[] $doctor
 * @property-read int|null $doctor_count
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereImgsTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereSeoDesDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereSeoKeyDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereSeoTitleDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereShareImageFacebookDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereShortContentDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialist whereYoastScore($value)
 */
	class Specialist extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SpecialistCategory
 *
 * @property int $id
 * @property string|null $name Tên danh mục tin tức
 * @property string|null $slug Đường dẫn
 * @property string|null $img Banner
 * @property int|null $parent Danh mục cha
 * @property string|null $content Banner
 * @property string|null $short_content Banner
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người sửa
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialistCategory whereYoastScore($value)
 */
	class SpecialistCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StatusBookApointment
 *
 * @property int $id
 * @property string|null $name Tên
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusBookApointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusBookApointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusBookApointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusBookApointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusBookApointment whereName($value)
 */
	class StatusBookApointment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TimePick
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $ord
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|TimePick newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimePick newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|TimePick query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|TimePick whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimePick whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimePick whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimePick whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimePick whereUpdatedAt($value)
 */
	class TimePick extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VLanguage
 *
 * @property string $keyword
 * @property string|null $vi_value
 * @property string|null $en_value
 * @property string|null $note
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $act
 * @property int|null $region
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage whereEnValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage whereUpdateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VLanguage whereViValue($value)
 */
	class VLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VRoutes
 *
 * @property int $id
 * @property string|null $vi_name Tên tiếng việt
 * @property string|null $en_name Tên tiếng anh
 * @property string|null $controller Controller
 * @property string|null $table Bảng
 * @property int|null $map_id Map id
 * @property int|null $is_static Là link tĩnh
 * @property int|null $in_sitemap Được hiển thị trong sitemap
 * @property string|null $code Mã link tĩnh(để lấy link theo ngôn ngữ)
 * @property string|null $vi_link Link tiếng việt
 * @property string|null $en_link Link tiếng anh
 * @property string|null $vi_seo_title Tiêu đề seo tiếng việt
 * @property string|null $vi_seo_key Từ khóa seo tiếng việt
 * @property string|null $vi_seo_des Mô tả seo tiếng việt
 * @property string|null $en_seo_title Tiêu đề seo tiếng anh
 * @property string|null $en_seo_key Từ khóa seo tiếng anh
 * @property string|null $en_seo_des Mô tả seo tiếng anh
 * @property \Illuminate\Support\Carbon|null $created_at Thời gian tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Thời gian cập nhật
 * @property string|null $map_table Bảng
 * @property int|null $update_by
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereController($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereEnLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereEnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereEnSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereEnSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereEnSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereInSitemap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereIsStatic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereMapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereMapTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereViLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereViName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereViSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereViSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VRoutes whereViSeoTitle($value)
 */
	class VRoutes extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VideoGallery
 *
 * @property int $id
 * @property string|null $name Tên
 * @property string|null $slug Đường dẫn
 * @property string|null $img Ảnh
 * @property string|null $video_info Link video
 * @property string|null $short_content Nội dung ngắn
 * @property string|null $content Nội dung
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property int|null $hot Video nổi bật
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người sửa
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property int|null $count_view Sắp xếp
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\VideoGalleryCategory[] $category
 * @property-read int|null $category_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\VideoGalleryVideoGalleryCategory[] $pivot
 * @property-read int|null $pivot_count
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereCountView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereVideoInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereYoastScore($value)
 */
	class VideoGallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VideoGalleryCategory
 *
 * @property int $id
 * @property string|null $name Tên danh mục tin tức
 * @property string|null $slug Đường dẫn
 * @property string|null $img Banner
 * @property string|null $icon Banner
 * @property int|null $parent Danh mục cha
 * @property string|null $content Banner
 * @property string|null $short_content Banner
 * @property int|null $ord Sắp xếp
 * @property int|null $act Kích hoạt
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property string|null $seo_title Tiêu đề seo
 * @property string|null $seo_key Từ khóa seo
 * @property string|null $seo_des Mô tả seo
 * @property int|null $create_by Người tạo
 * @property int|null $update_by Người sửa
 * @property string|null $share_title_facebook Tiêu đề seo facebook
 * @property string|null $share_description_facebook Nội dung seo facebook
 * @property string|null $share_image_facebook Ảnh share facebook
 * @property string|null $yoast_score
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\VideoGallery[] $videoGallery
 * @property-read int|null $video_gallery_count
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereOrd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereSeoDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereShareDescriptionFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereShareImageFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereShareTitleFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereUpdateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryCategory whereYoastScore($value)
 */
	class VideoGalleryCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VideoGalleryVideoGalleryCategory
 *
 * @property int $video_gallery_id Id tin tức
 * @property int $video_gallery_category_id Id danh mục tin tức
 * @property \Illuminate\Support\Carbon|null $created_at Ngày tạo
 * @property \Illuminate\Support\Carbon|null $updated_at Ngày cập nhật
 * @property-read \App\Models\VideoGalleryCategory|null $videoGalleryCategory
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryVideoGalleryCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryVideoGalleryCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryVideoGalleryCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryVideoGalleryCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryVideoGalleryCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryVideoGalleryCategory whereVideoGalleryCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGalleryVideoGalleryCategory whereVideoGalleryId($value)
 */
	class VideoGalleryVideoGalleryCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Ward
 *
 * @property int $id
 * @property string|null $code
 * @property int|null $district_id
 * @property string|null $name
 * @property string|null $lat Vĩ độ
 * @property string|null $long Kinh độ
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel act()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel fullTextSearch($columns, $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel ord()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel publish()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel slug($slug, $table = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereUpdatedAt($value)
 */
	class Ward extends \Eloquent {}
}

