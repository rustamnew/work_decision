<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="summonedFormWrap" id="summonedFormWrap">

	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="summonedForm">
	<?=bitrix_sessid_post()?>
		<a href="#" class="summonedFormClose" id="summonedFormClose" onClick="closeFancybox(event)">X</a>
		<p>Оставьте заявку и мы перезвоним Вам в ближайшее время!</p>
		<?
			if(!empty($arResult["ERROR_MESSAGE"])) {
				foreach($arResult["ERROR_MESSAGE"] as $v)
					ShowError($v);
			}

			if($arResult["OK_MESSAGE"] <> '') {
				?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
			}
			
		?>
		
		<input class="summonedFormInputName" type="text" name="user_name" placeholder="Ваше Имя" required>
		<input class="summonedFormInputEmail" type="email" name="user_email" placeholder="Ваш Email" required>
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input type="submit" name="submit" value="Отправить" class="summonedFormInputSubmit">

		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
			<div class="mf-captcha">
				<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
				<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
				<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
				<input type="text" name="captcha_word" size="30" maxlength="50" value="">
			</div>
		<?endif;?>
	</form>

</div>

