{* Smarty *}
{extends file='Admin/layout.tpl'}

{block name=body}

    <div class="container">
        <div class="jumbotron mt-12">
            <p class="lead">Fine <b>{$config->CompanyName}</b>! You are in Settings Page,  go back in to
                <a class="btn btn-sm btn-primary" href="{$modulelink}" role="button">Home Page</a>
                or see a
                <a class="btn btn-sm btn-info" href="{$modulelink}&form" role="button">Demo Form</a>
            </p>
        </div>
    </div>

{/block}