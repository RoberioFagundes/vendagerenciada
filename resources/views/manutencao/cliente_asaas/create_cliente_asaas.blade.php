<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="icarus-form js-add-customer-account-modal-form" action="{{route('clienteAsaas.store')}}" method="POST">
        @csrf
        <div id="fieldsContainer">


            <div class="control-box">


                <div class="icarus-control-group">
                    <div class="headline">Dados do cliente</div>
                </div>


                <div class="icarus-inline-group">
                    <div class="icarus-control-group">
                        <label class="control-label" for="name">
                            Nome
                        </label>
                        <div class="controls">
                            <input type="text" id="name" class="input-xxlarge js-name has-error-message" name="name"
                                validate-required="true" placeholder="Informe o nome do cliente">
                            <span class="error-message">Este campo é obrigatório</span>
                        </div>
                    </div>
                    <div class="icarus-control-group">
                        <label class="control-label" for="cpfCnpj">
                            CPF ou CNPJ <span class="icarus-optional">(Opcional)</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="cpfCnpj" name="cpfCnpj" class="input-xlarge"
                                data-validation-url="/customerAccount/cpfCnpjIsAlreadyRegistered"
                                data-validate="noValidation" data-constraint="cpfCnpj"
                                placeholder="Informe o CPF ou CNPJ do cliente">
                            <div id="note-already-registered" class="note-already-registered"></div>
                        </div>
                    </div>
                </div>

                <div class="icarus-inline-group">
                    <div class="icarus-control-group">
                        <label class="control-label" for="email">
                            Email <span class="icarus-optional js-email-optional"
                                style="display: none;">(Opcional)</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="email" class="input-xxlarge js-email" name="email"
                                data-validate="noValidation" placeholder="Informe o email do cliente">
                        </div>
                    </div>

                    <div class="icarus-control-group">
                        <label class="control-label" for="mobilePhone">
                            Celular <span class="icarus-optional js-mobile-phone-optional"
                                style="display: none;">(Opcional)</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="mobilePhone" name="mobilePhone" class="input-xlarge js-mobile-phone"
                                data-validate="noValidation" data-constraint="phone" maxlength="15"
                                placeholder="(00) 00000-0000">
                        </div>
                    </div>
                </div>



                <div class="icarus-control-group">

                    <div class="controls">
                        <input type="submit" value="cadastrar">
                    </div>
                </div>
            </div>


            </strong></strong>
        </div><strong><strong>
            </strong></strong>
        </div>
    </form>
</body>

</html>