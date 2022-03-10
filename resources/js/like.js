///////////////////////////////////////
// いいね！用のJavaScript
///////////////////////////////////////

$(function () {
    // いいね！がクリックされたとき
    $('.js-like').click(function () {
        const this_obj = $(this);
        const cat_id = $(this).data('cat-id');
        const like_id = $(this).data('like-id');

        if (like_id) {
            // いいね！取り消し
            // 非同期通信
            $.ajax({
                headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                }, 
                url: '/like',
                type: 'POST',
                data: {
                    'like_id': like_id
                },
                timeout: 10000
            })
                // 取り消しが成功
                .done(() => {
                    this_obj.data('like-id', null);

                    // いいね！ボタンをデフォルトにする
                    this_obj.removeClass('btn-reverse');
                    // いいね！ボタンの文言変更
                    this_obj.text('☆お気に入り登録');
                })
                .fail((data) => {
                    alert('処理中にエラーが発生しました。');
                    console.log(data);
                });
        } else {
            // いいね！付与
            // 非同期通信
            $.ajax({
                headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                },
                url: '/like',
                type: 'POST',
                data: {
                    'cat_id': cat_id
                },
                timeout: 10000
            })
                // いいね！が成功
                .done((data) => {
                    this_obj.data('like-id', data['like_id']);

                    // いいね！ボタンを濃くする
                    this_obj.addClass('btn-reverse');
                    // いいね！ボタンの文言変更
                    this_obj.text('★お気に入り');
                })
                .fail((data) => {
                    alert('処理中にエラーが発生しました。');
                    console.log(data);
                });
        }
    });
})