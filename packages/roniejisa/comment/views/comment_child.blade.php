<div class="comment-item">
    <div class="comment-item__top">
        @php
            $user = false;
            if (config('cmrsc_comment.checkUser')) {
                $user = $commentChild->user;
            }
        @endphp
        @if (config('cmrsc_comment.hasAvatarByName'))
            <div class="h-12 w-12 rounded-full text-white shadow-xl uppercase mr-3 flex justify-center items-center" style="background: #{{ CommentHelper::randomColor() }}" comment-skeleton>
                {{ CommentHelper::getFirstStrinng($commentChild->name) }}
            </div>
        @elseif (config('cmrsc_comment.hasAvatar', false))
            <div class="comment-item__img" style="background-image:url({%IMGV2.user.img.390x0%})" comment-skeleton>
            </div>
        @endif
        <div class="comment-item__info">
            <div class="comment-user__info">
                <p class="user-info__name" comment-skeleton>
                    {{ $commentChild->name ?? ($user->name ?? ($user->email ?? 'Quản trị viên')) }}
                </p>
            </div>
            <div class="comment-item__content" comment-skeleton>
                {-commentChild.content-}
            </div>
            <span class="comment-item__datetime mt-2 inline-block" comment-skeleton>{{ RSCustom::showTime($commentChild->created_at, false) }}</span>
        </div>
    </div>
</div>
