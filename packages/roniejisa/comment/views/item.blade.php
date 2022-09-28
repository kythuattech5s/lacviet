<div class="comment-item">
    <div class="comment-item__top">
        @php
            $user = null;
            if (config('cmrsc_comment.checkUser')) {
                $user = $comment->user;
            }
        @endphp
        @if (config('cmrsc_comment.hasAvatarByName'))
            <div class="mr-3 flex h-12 w-12 items-center justify-center rounded-full uppercase text-white shadow-xl" style="background: #{{ CommentHelper::randomColor() }}" comment-skeleton>
                {{ CommentHelper::getFirstStrinng($comment->name) }}
            </div>
        @elseif(config('cmrsc_comment.hasAvatar'))
            <div class="comment-item__img" style="background-image:url({%IMGV2.user.img.390x0%})" comment-skeleton></div>
        @endif
        <div class="comment-item__info">
            <div class="comment-user__info">
                <p class="user-info__name" comment-skeleton>
                    {{ $comment->name ?? ($user->name ?? ($user->email ?? '')) }}
                </p>
                {{-- <p class="content-plus-comment gap-1">
                    <label class="comment-check" comment-skeleton>
                        <img src="{'comment/images/check.svg'}" alt="">
                    </label>
                    <span comment-skeleton>Học viên tại Timespro</span>
                </p> --}}
            </div>
            @if (config('cmrsc_comment.showRating') && ($ratingInfo = $comment->rating) !== null)
                <div class="comment-rating-group flex items-center">
                    @include('commentRS::rating', ['rating' => $ratingInfo->rating * 20 . '%', 'attribute' => 'comment-skeleton'])
                    @if (config('cmrsc_comment.hasLabel'))
                        <span class="comment-rating-label" comment-skeleton>{{ $ratingInfo->getLabel() }}</span>
                    @endif
                </div>
            @endif
            <div class="comment-item__content" comment-skeleton>
                {-comment.content-}
            </div>
            <div class="comment-item__imgs">
                @php
                    $imgs = json_decode($comment->imgs, true);
                @endphp
                @if ($imgs !== null && count($imgs) > 0)
                    @foreach ($imgs as $item)
                        @php
                            $itemImg = new \stdClass();
                            $itemImg->img = json_encode($item);
                        @endphp
                        <div class="comment-img__item" comment-skeleton>
                            <a href="{%IMGV2.itemImg.img.-1%}" data-fslightbox="lightbox{{ Support::show($comment, 'id') }}">
                                @include('image_loader.tiny', [
                                    'itemImage' => $itemImg,
                                    'key' => 'img',
                                ])
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="comment-action flex items-center gap-4">
                @if (config('cmrsc_comment.hasRep', false))
                    <a type="button" data-placeholder="Trả lời bình luận" class="group flex cursor-pointer gap-[4px] duration-300 hover:text-[#028cde]" comment-skeleton button-show-reply>
                        {{-- @include('commentRS::icon.reply')  --}}
                        <span class="text-sm text-[#308cc2]"> Trả lời</span></a>
                @endif
                @if (config('cmrsc_comment.hasLike', false))
                    @php
                        $user_like = $comment->likes->filter(function ($q) {
                            return $q->user->id == Auth::id();
                        });
                    @endphp
                    <a like-comment class="{{ $user_like->count() > 0 ? 'like' : '' }} flex cursor-pointer gap-[4px]" data-id="{-comment.id-}" comment-skeleton>
                        {{-- @include('commentRS::icon.like') <span>Thích</span> --}}
                    </a>
                @endif
                <span class="comment-item__datetime" comment-skeleton>{{ RSCustom::showTime($comment->created_at) }}</span>
                @if (config('cmrsc_comment.hasRep', false))
                    <div class="rep-comment hidden w-full justify-end" action="{{ config('cmrsc_comment.repUrl') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plus_comment_id" value="{-comment.id-}">
                        <input type="hidden" name="map_table" value="{-comment.map_table-}">
                        <input type="hidden" name="map_id" value="{-comment.map_id-}">
                        <div class="flex w-full flex-wrap items-center gap-4 rounded-md bg-[#F5F5F5] px-4 py-[13px]">
                            <div class="group-form flex-1">
                                <textarea name="content" id="" cols="30" rows="1" clear class="w-full rounded-md border px-2 py-2" rules="required" name="content" placeholder="Nhập câu trả lời"></textarea>
                                <div class="grid w-full grid-cols-3 gap-3">
                                    <input type="text" name="plus_name" clear class="col-span-1 rounded-md border px-2 py-1" rules="required" placeholder="Họ tên">
                                    <input type="text" name="plus_email" clear class="col-span-1 rounded-md border px-2 py-1" rules="required" placeholder="Email">
                                    <input type="text" name="plus_phone" clear class="col-span-1 rounded-md border px-2 py-1" rules="required" placeholder="Số điện thoại">
                                </div>
                                <button type="submit" button-reply data-placeholder="Nhập câu trả lời..." class="mt-2 flex space-x-[4px] rounded-md bg-[#028cde] px-3 text-white" comment-skeleton>
                                    Trả lời
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @if (($childs = $comment->childs()->where('act', 1)->paginate(5, ['*'], 'page', 1))->count() > 0)
        <div class="comment-childs">
            @foreach ($childs as $commentChild)
                @include('commentRS::comment_child')
            @endforeach
        </div>
        @if ($childs->lastPage() > $childs->currentPage())
            <button type="button" class="more-comment--child" page-current="{{ $childs->currentPage() }}">Xem thêm</button>
        @endif
    @endif
</div>
