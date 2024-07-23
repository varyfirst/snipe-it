<?php

return [

    'undeployable' 		=> '<strong>Warning: </strong> This asset has been marked as currently undeployable. If this status has changed, please update the asset status.',
    'does_not_exist' 	=> '資産が存在しません。',
    'does_not_exist_var'=> 'Asset with tag :asset_tag not found.',
    'no_tag' 	        => 'No asset tag provided.',
    'does_not_exist_or_not_requestable' => 'その資産は存在しないか要求可能ではありません。',
    'assoc_users'	 	=> 'この資産はユーザーに貸し出されているため削除できません。資産を返却後、もう一度、やり直して下さい。 ',
    'warning_audit_date_mismatch' 	=> 'This asset\'s next audit date (:next_audit_date) is before the last audit date (:last_audit_date). Please update the next audit date.',

    'create' => [
        'error'   		=> '資産は作成されませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産は作成されました。',
        'success_linked' => ':tag を持つアセットは正常に作成されました。 <strong><a href=":link" style="color: white;"></a></strong> を表示するにはここをクリックしてください。',
    ],

    'update' => [
        'error'   			=> '資産は更新されませんでした。もう一度、やり直して下さい。',
        'success' 			=> '資産は正常に更新されました。',
        'encrypted_warning' => '資産は正常に更新されましたが、権限が原因で暗号化されたカスタム項目がありませんでした',
        'nothing_updated'	=>  'フィールドが選択されていないため、更新されませんでした。',
        'no_assets_selected'  =>  '資産が選択されていないため、何も更新されませんでした。',
        'assets_do_not_exist_or_are_invalid' => '選択したアセットは更新できません。',
    ],

    'restore' => [
        'error'   		=> '資産は復元されませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産は正常に復元されました。',
        'bulk_success' 		=> '資産は正常に復元されました。',
        'nothing_updated'   => '資産が選択されていないため、何も復元されませんでした。', 
    ],

    'audit' => [
        'error'   		=> 'Asset audit unsuccessful: :error ',
        'success' 		=> '資産の監査ログに記録しました。',
    ],


    'deletefile' => [
        'error'   => 'ファイルが削除できませんでした。もう一度、やり直して下さい。',
        'success' => 'ファイルは正常に削除されました。',
    ],

    'upload' => [
        'error'   => 'ファイルがアップロードできませんでした。もう一度、やり直して下さい。',
        'success' => 'ファイルが正常にアップロードされました。',
        'nofiles' => 'アップロードするファイルが選択されていないか、アップロードしようとしているファイルが大き過ぎます。',
        'invalidfiles' => 'いずれかのファイルが大き過ぎるか、ファイルタイプが許可されていません。許可されているファイルタイプ（png, gif, jpg, doc, docx, pdf, and txt）',
    ],

    'import' => [
        'import_button'         => 'Process Import',
        'error'                 => 'いくつかの項目は正しくインポートされませんでした。',
        'errorDetail'           => '以下のアイテムはエラーのためインポートできませんでした',
        'success'               => 'ファイルはインポートされました。',
        'file_delete_success'   => 'ファイルを削除しました。',
        'file_delete_error'      => 'ファイルが削除出来ませんでした。',
        'file_missing' => '選択されたファイルがありません',
        'header_row_has_malformed_characters' => 'ヘッダー行の1つ以上の属性に不正な形式のUTF-8文字が含まれています',
        'content_row_has_malformed_characters' => 'コンテンツの最初の行の1つまたは複数の属性に不正な形式のUTF-8文字が含まれています',
    ],


    'delete' => [
        'confirm'   	=> 'この資産を削除してもよろしいですか？',
        'error'   		=> '資産を削除する際に問題が発生しました。もう一度やり直して下さい。',
        'nothing_updated'   => '資産が選択されていないため、削除されませんでした。',
        'success' 		=> '資産は正常に削除されました。',
    ],

    'checkout' => [
        'error'   		=> '資産はチェックアウトされませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産は正常にチェックアウトされました。',
        'user_does_not_exist' => 'その利用者は不正です。もう一度、やり直して下さい。',
        'not_available' => 'この資産はチェックアウトできません!',
        'no_assets_selected' => 'リストから少なくとも1つの資産を選択する必要があります',
    ],

    'checkin' => [
        'error'   		=> '資産はチェックインされませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産は正常にチェックインされました。',
        'user_does_not_exist' => 'その利用者は不正です。もう一度、やり直して下さい。',
        'already_checked_in'  => 'その資産はすでにチェックインしています。',

    ],

    'requests' => [
        'error'   		=> '資産は要求されませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産の要求処理が成功しました。',
        'canceled'      => 'チェックアウトリクエストが正常にキャンセルされました。',
    ],

];
