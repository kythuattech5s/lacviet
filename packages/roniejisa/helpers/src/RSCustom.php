<?php

namespace Roniejisa\Helpers;

use Carbon\Carbon;
use DateTime;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class RSCustom
{
    public static function paginate($items, int $perPage = 15, int $page = null, array $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginate = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
        $paginate = $paginate->setPath(str_replace(url('/'), '', url()->current()));
        return $paginate;
    }

    public static function isDateTime($string, $format = 'Y-m-d H:i:s')
    {
        return \DateTime::createFromFormat($format, $string);
    }

    public static function showTime(string $timeStr, bool $isDateTime = false, string $format = "H:i d/m/Y", $formatOtherDate = "d \\t\h\g m")
    {
        if ($isDateTime) {
            $date = new DateTime($timeStr, new \DateTimeZone('Asia/Ho_Chi_Minh'));
            if ($date->format('Y-m-d') != date('Y-m-d', time())) {
                return $date->format($formatOtherDate);
            }
            return $date->format($format);
        }
        $updateTime = (new DateTime($timeStr, new \DateTimeZone('Asia/Ho_Chi_Minh')))->getTimestamp();
        $now = (new DateTime())->getTimestamp();
        $timeNumber = $updateTime - $now;
        $day = floor($timeNumber / (24 * 60 * 60));
        $hour = floor($timeNumber / (60 * 60));
        $minutes = floor($timeNumber / 60);
        $second = floor($timeNumber);
        $isReverse = false;
        if ($timeNumber < 0) {
            $isReverse = true;
            $timeNumber = $now - $updateTime;
        }

        if ($timeNumber >= (2 * 24 * 60 * 60)) {
            $value = date("H:i d/m/Y", $updateTime);
        } elseif ($timeNumber >= (24 * 60 * 60)) {
            $value = $day + 1 . " ngày nữa";
        } elseif ($timeNumber >= (60 * 60)) {
            $value = $hour + 1 . " giờ nữa";
        } elseif ($timeNumber >= 60) {
            $value = $minutes + 1 . " phút nữa";
        } else {
            $value = $second + 1 . " giây nữa";
        }
        if ($isReverse) {
            $value = str_replace(['-', 'nữa'], ['', 'trước'], $value);
        }

        return $value;
    }

    public static function showDateName(string $timeStr, string $format = 'l d-m-Y')
    {
        if (self::isDateTime($timeStr)) {
            $timeStr = Carbon::parse($timeStr)->format($format);
            return self::dateNameToVi($timeStr);
        }
    }

    public static function dateNameToVi(string $timeStr)
    {
        if (is_int(strpos($timeStr, 'Monday'))) {
            $day = str_replace('Monday', 'Thứ 2', $timeStr);
        } elseif (is_int(strpos($timeStr, 'Tuesday'))) {
            $day = str_replace('Tuesday', 'Thứ 3', $timeStr);
        } elseif (is_int(strpos($timeStr, 'Wednesday'))) {
            $day = str_replace('Wednesday', 'Thứ 4', $timeStr);
        } elseif (is_int(strpos($timeStr, 'Thursday'))) {
            $day = str_replace('Thursday', 'Thứ 5', $timeStr);
        } elseif (is_int(strpos($timeStr, 'Friday'))) {
            $day = str_replace('Friday', 'Thứ 6', $timeStr);
        } elseif (is_int(strpos($timeStr, 'Saturday'))) {
            $day = str_replace('Saturday', 'Thứ 7', $timeStr);
        } elseif (is_int(strpos($timeStr, 'Sunday'))) {
            $day = str_replace('Sunday', 'CN', $timeStr);
        }
        return $day;
    }

    public static function createImageBase64($img)
    {
        if (is_array($img)) {
            $path = public_path($img['path'] . $img['name']);
            $path = file_exists($path) ? $path : public_path(str_replace('public/', '', $img['path']) . $img['name']);
        } elseif (is_object($img)) {
            $path = public_path($img->path . $img->name);
            $path = file_exists($path) ? $path : public_path(str_replace('public/', '', $img->path) . $img->name);
        } else {
            $path = $img;
        }
        if (!file_exists($path)) {
            return ['', '', ''];
        }
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $name = pathinfo($path, PATHINFO_BASENAME);
        $type = in_array($type, ['jpg', 'gif', 'jpeg', 'webp', 'png', 'tiff', '']) ? "image/$type" : "video/$type";
        $data = file_get_contents($path);
        $base64 = 'data:' . $type . ';base64,' . base64_encode($data);
        return [$base64, $name, $type];
    }

    public static function checkActive($haystack, bool $needle = true, string $show = 'active')
    {
        $needle = $needle ? url()->current() : $needle;
        $arrayHayStack = is_array($haystack) ? $haystack : [$haystack];
        return in_array($needle, $arrayHayStack) ? $show : '';
    }

    /**
     * @param string $param
     * @param string|array $value
     * @return string
     */
    public static function checkActiveParam($param, $value = [], string $show = 'active')
    {
        $array = is_array($value) ? $value : [$value];

        if (is_array(request()->input($param))) {
            return count(array_intersect(request()->input($param), $array)) > 0 ? $show : '';
        } else {
            return in_array(request()->input($param), $array) ? $show : '';
        }
    }

    public static function insertFileFromUrl(string $folder, string $url)
    {
        $urlCut = explode('/', $url);
        $name = $urlCut[count($urlCut) - 1];
        $name = explode('.', $name)[0];
        if (!preg_match('/^[a-z0-9]+$/', $folder)) {
            throw new \Exception("Tên thư mục chỉ được chứa các ký tự [a-z0-9]");
        }
        $fileContent = file_get_contents($url);
        if (empty($fileContent)) {
            return;
        }
        $fileExtension = strtolower(substr($url, strrpos($url, '.') + 1));
        $fileFullName = $name . '.' . $fileExtension;
        $fileFullPath = $folder . '/' . $fileFullName;
        file_put_contents(public_path($fileFullPath), $fileContent);
        return $fileFullPath;
    }

    public static function replaceToCharacter(string $str, string $character, bool $isStart = true, int $lengthShow = 2, bool $after = false)
    {
        $afterString = '';
        if ($after) {
            list($str, $afterString) = explode($after, $str);
            $afterString = $after . $afterString;
        }
        $length = mb_strlen($str) - $lengthShow;
        $string = substr($str, $isStart ? -$lengthShow : 0, $lengthShow);
        for ($i = 0; $i < $length; $i++) {
            if ($isStart) {
                $string = $character . $string;
            } else {
                $string .= $character;
            }
        }
        return $string . $afterString;
    }

    public static function URLPrevious(bool $isSet = true, string $defaultUrl = '/')
    {
        $key = 'PREVIOUS_URL_RS';
        if ($isSet) {
            $url = url()->previous();
            $url = strpos($url, url('/')) >= 0 ? $url : url($defaultUrl);
            session()->put($key, $url);
        }

        if (!$isSet) {
            $url = is_null(($url = session()->get($key))) ? url()->previous() : $url;
            $url = $url == url()->current() ? url($defaultUrl) : $url;
            session()->forget($key, null);
        }

        $arrayNotRedirect = ['.js', '.css', '_debugbar', 'javascript', 'jpg', 'jpeg', 'png', 'gif', 'bmp', 'tiff', 'svg', "accounts.google.com"];
        foreach ($arrayNotRedirect as $error) {
            if (strpos($url, $error) !== false) {
                $url = url($defaultUrl);
                break;
            }
        }
        return $url;
    }

    public static function setLinkCurrent(array $params)
    {
        return request()->fullUrlWithQuery(array_merge(request()->all(), $params));
    }

    // Lấy param trong url
    public static function getParamUrl(string $url, string $name = 'page')
    {
        $url = parse_url($url);
        parse_str($url['query'], $params);
        return $params[$name];
    }

    // Cut string sau từ đầu đến trước từ cuối
    public static function cutString(string $str, string $start = "item-code=", string $end = "&amp;")
    {
        $cutFirst = substr($str, strpos($str, $start) + strlen($start));
        return substr($cutFirst, 0, strpos($cutFirst, $end));
    }

    // Lưu log
    public static function saveLog(string $pathAll, string $content, $type = FILE_APPEND)
    {
        $paths = explode('/', $pathAll);
        $path = '';
        for ($index = 0; $index < count($paths) - 1; $index++) {
            $path .= $index == 0 ? $paths[$index] : '/' . $paths[$index];
            if (!file_exists(public_path($path))) {
                mkdir(public_path($path), 0777, true);
            }
        }
        file_put_contents(public_path($pathAll), $content, $type);
    }

    public static function changeAndPushParamURL($url, $paramName, $paramValue)
    {
        if (preg_match('/[?&](' . $paramName . ')=[^&]*/', $url)) {
            $url = preg_replace('/([?&]' . $paramName . ')=[^&]*/', '$1=' . $paramValue, $url);
        } else {
            $url .= strpos($url, '?') ? '&' : '?';
            $url .= $paramName . '=' . $paramValue;
        }
        return $url;
    }

    public static function getAllChild($model, string $field, string $field_parent, int $id, array $categoryIds = [])
    {
        $categoryIds[] = $id;
        $items = $model::where($field_parent, $id)->get();
        if ($items->count() > 0) {
            foreach ($items as $item) {
                $categoryIds = array_merge($categoryIds, self::getAllChild($model, $field, $field_parent, $item->$field, []));
            }
        }
        return $categoryIds;
    }

    public static function getAllChildLevel($model, string $field, string $field_parent, int $id, array $categoryIds = [])
    {
        $categoryIds[] = $id;
        $items = $model::where($field_parent, $id)->get();
        if ($items->count() > 0) {
            foreach ($items as $item) {
                $categoryIds = array_merge($categoryIds, self::getAllChildLevel($model, $field, $field_parent, $item->$field, []));
            }
        }
        return $categoryIds;
    }

    /**
     * @param $model - Product 
     * @param $field - 'id'
     * @param $field_parent - ''
     * @param $id - ''
     * @param $categoryIds // repository
     */
    public static function getAllParent($model, string $field, string $field_parent, int $id, array $categoryIds = []): array
    {
        $item = $model::where($field, $id)->first();
        if ($item !== null) {
            $categoryIds[] = $item->$field;
        }
        if ($item !== null && $item->$field_parent != null) {
            return self::getAllParent($model, $field, $field_parent, $item->$field_parent, $categoryIds);
        }
        return $categoryIds;
    }

    public static function getString($string, $setting = [
        'regex' => '/[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễếệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]/u
'
    ])
    {
        if (isset($setting['regex'])) {
            return trim(preg_replace($setting['regex'], '', $string)) ?? '';
        } elseif (isset($setting['replace']) && isset($setting['replace_to'])) {
            foreach ($setting['replace'] as $check) {
                $string = json_decode(str_replace($check, "", json_encode($string, JSON_PRETTY_PRINT)));
            }
            return trim($string);
        } else {
            return trim(html_entity_decode(htmlspecialchars_decode($string)));
        }
    }

    public static function decodeBase64($string)
    {
        return base64_decode(str_pad(strtr($string, '-_', '+/'), strlen($string) + (strlen($string) % 4), '=', STR_PAD_RIGHT));
    }

    public static function encodeBase64($string)
    {
        return  rtrim(strtr(base64_encode($string), '+/', '-_'), '=');
    }


    public static function removeTagsHTML($data_content, $separator = " ", $html_tags = array("main", "em", "span", "section", "html", "span", "b", 'i', 'div', 'img', 'br', 'font', 'a', 'blockquote', 'p'))
    {
        $tagStr = "";

        foreach ($html_tags as $key => $value) {
            $tagStr .= $key == count($html_tags) - 1 ? $value : "{$value}|";
        }

        $pat_str = array("/(<\s*\b({$tagStr})\b[^>]*>)/i", "/(<\/\s*\b({$tagStr})\b\s*>)/i");
        $result = preg_replace($pat_str, $separator, $data_content);
        $result = strip_tags($result);
        $result = htmlspecialchars_decode($result);
        return $result;
    }

    public static function redirectTo($url, $code, $message)
    {
        return redirect()->to($url)->with('messageNotify', $message)->with('typeNotify', $code);
    }

    /**
     * Khi sử dụng html_single_dom
     */
    public static function parseContent($node, $attribute = 'innertext', $default = '<div></div>')
    {
        return $node == null ? $default : $node->$attribute;
    }


    //

    public static function getTimeOfVideo($time, $separator = [
        'hour' => ':',
        'minute' => ':'
    ])
    {
        if ((int) $time === 0) {
            $time = 0;
        }
        $hours = floor($time / 3600);
        $minutes = floor(($time - $hours * 3600) / 60);
        $seconds = $time - $hours * 3600 - $minutes * 60;
        $seconds = floor(round($seconds * 100) / 100);
        if ($hours < 10) {
            $hours = "0" . $hours;
        }
        if ($minutes < 10) {
            $minutes = "0" . $minutes;
        }
        if ($seconds < 10) {
            $seconds =
                "0" . $seconds;
        }
        if ((int) $hours  > 0 && (int) $minutes > 0) {
            return $hours . $separator['hour'] . $minutes . $separator['minute'] . $seconds;
        } elseif (isset($separator['second']) && (int) $minutes > 0) {
            return $minutes . $separator['minute'] . $seconds . $separator['second'];
        } elseif (isset($separator['second'])) {
            return $seconds . $separator['second'];
        } else {
            return $minutes . $separator['minute'] . $seconds;
        }
    }
}
