{* Smarty *}
{extends file='Admin/layout.tpl'}

{block name=body}
    <div class="container">
        <div class="jumbotron mt-3">
            <form method="post" action="{$modulelink}&formPostData">
                <h2>If u have clear install of Thor Addon, This are default data by ClientSummaryPage</h2>
                <div class="row">
                    <p>{$user->firstname}</p>
                    <p>{$user->lastname}</p>
                    <p>{$user->companyname}</p>
                    <p>{$user->email}</p>
                    <p>{$user->address1}</p>
                </div>

                <hr>
                <div class="row text-right">
                    <a href="{$baselink}/clientssummary.php?userid={$user->id}" type="button" class="btn btn-warning">Go
                        Back</a>
                </div>
            </form>
        </div>
    </div>
{/block}