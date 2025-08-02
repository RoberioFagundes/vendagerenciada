<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Script src="{{ asset('public/js/vue.min.js') }}"></Script>
    <title>Document</title>
</head>

<body>
    <form class="icarus-form js-icarus-form-add-payment" action="/payment/save">

        <div class="control-box js-load-fields-container">
            <input type="hidden" name="chargeType" value="RECURRENT" class="js-charge-type">
            <input type="hidden" value="13" name="upToTwentyOneStartInstallmentCount"
                class="js-up-to-twenty-one-credit-card-start-installment-count">

            <div class="icarus-control-group">
                <div class="headline js-modal-form-title">Dados da assinatura </div>
               @foreach ($cliente_id as $client )
               
               <input type="text" name="customerAccountId" id="" value="{{$client->cliente_id}}">
               @endforeach
            </div>


            <div class="icarus-inline-group">

                <!-- <div class="icarus-control-group">
                    <input type="hidden" class="js-return-to-list" value="true">

                    <label class="control-label" for="s2id_autogen10">
                        Cliente
                    </label>
                    <div class="controls">
                        <div class="select2-container search input-xxlarge js-customer-account-id"
                            id="s2id_customerAccountId" style="width: 320px;"><a href="javascript:void(0)"
                                onclick="return false;" class="select2-choice select2-default" tabindex="-1">
                                <span>Selecione o cliente</span><abbr
                                    class="select2-search-choice-close select2-display-none"
                                    style="display: none;"></abbr>
                                <div><b></b></div>
                            </a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen10">
                            <div class="select2-drop select2-display-none bigdrop select2-with-searchbox">
                                <div class="select2-search"> <input type="text" autocomplete="off"
                                        class="select2-input"> </div>
                                <ul class="select2-results"> </ul>
                            </div>
                        </div><input type="text" class="search input-xxlarge js-customer-account-id select2-offscreen"
                            name="customerAccountId" id="customerAccountId" value="" validate-required="true"
                            tabindex="-1">
                    </div>
                </div> -->


                <div class="icarus-control-group">
                    <label for="s2id_autogen11" class="control-label">Forma de pagamento</label>
                    <div class="controls">

                        <div class="select2-container input-xxlarge js-billing-type icarus-select-container"
                            id="s2id_billingType" style="width: 320px;"><a href="javascript:void(0)"
                                onclick="return false;" class="select2-choice icarus-select-choice" tabindex="-1">
                                <span>Selecione a forma de pagamento</span>
                                <abbr class="select2-search-choice-close select2-display-none">
                                </abbr>
                                <div><b></b>
                        </div>
                            </a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen11">
                            <div
                                class="select2-drop select2-display-none icarus-select-dropdown select2-with-searchbox">
                                <div class="select2-search">
                                     <input type="text" autocomplete="off" class="select2-input icarus-select-input"> 
                                </div>
                                <ul class="select2-results icarus-select-results"> </ul>
                            </div>
                        </div><select name="billingType" id="billingType"
                            class="input-xxlarge js-billing-type select2-offscreen" validate-required="true"
                            data-constraint="select" tabindex="-1">
                            <option value="">Selecione a forma de pagamento</option>
                            <option value="BOLETO">Boleto Bancário / Pix</option>
                            <option value="UNDEFINED">Pergunte ao cliente</option>
                            <option value="MUNDIPAGG_CIELO">Cartão de Crédito</option>
                            <option value="PIX">Pix</option>
                        </select>
                    </div>

                    <!-- não sei se vou usar -->

                    <!-- <div class="icarus-note js-pix-payment-condition hide">
                        Confira as
                        <a href="https://ajuda.asaas.com/pt-BR/articles/5717343-como-receber-por-pix-no-asaas"
                            target="_blank" rel="noopener noreferrer" class="icarus-link">
                            condições de recebimento via Pix.
                        </a>
                    </div> -->

                </div>
            </div>

            <div class="icarus-inline-group js-inline-group-for-detached-installment" style="display: none;">
                <div class="icarus-control-group">
                    <label for="originalValue" class="control-label">Valor da cobrança</label>
                    <div class="controls">
                        <div class="icarus-input-prepend prepend-currency">
                            <input type="text" id="originalValue" name="totalValue"
                                class="input-xxlarge js-original-value" autocomplete="off" validate-required="true"
                                maxlength="10" data-constraint="money" placeholder="0,00">
                        </div>
                    </div>
                </div>

                <input type="hidden" name="value" class="js-value" autocomplete="off">

                <div class="icarus-control-group">
                    <label for="s2id_autogen12" class="control-label">Parcelas</label>
                    <div class="controls">
                        <div class="select2-container disabled input-xxlarge js-installment-count icarus-select-container"
                            id="s2id_installmentCount" style="width: 320px;"><a href="javascript:void(0)"
                                onclick="return false;" class="select2-choice icarus-select-choice" tabindex="-1">
                                <span>À vista (R$ 0,00)</span><abbr
                                    class="select2-search-choice-close select2-display-none"></abbr>
                                <div><b></b></div>
                            </a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen12">
                            <div
                                class="select2-drop select2-display-none icarus-select-dropdown select2-with-searchbox">
                                <div class="select2-search"> <input type="text" autocomplete="off"
                                        class="select2-input icarus-select-input"> </div>
                                <ul class="select2-results icarus-select-results"> </ul>
                            </div>
                        </div><select name="installmentCount" id="installmentCount"
                            class="disabled input-xxlarge js-installment-count select2-offscreen"
                            data-method-event="change" data-constraint="select" validate-required="true" tabindex="-1">
                            <option value="1">À vista (R$ 0,00)</option>
                        </select>
                    </div>
                    <div class="icarus-note js-up-to-twenty-one-credit-card-installment-count-message hide">
                        Parcelamento acima de 12x são aceitos apenas pelas bandeiras Mastercard e Visa e estão sujeitos
                        a aprovação do emissor do cartão do seu cliente.
                    </div>
                </div>
            </div>



            <div class="icarus-inline-group js-inline-group-for-subscription">
                <div class="icarus-control-group">
                    <label class="control-label" for="s2id_autogen13">Em um intervalo</label>
                    <div class="controls">
                        <div class="select2-container input-xxlarge js-subscription-cycle icarus-select-container"
                            id="s2id_subscriptionCycle" style="width: 320px;"><a href="javascript:void(0)"
                                onclick="return false;" class="select2-choice icarus-select-choice" tabindex="-1">
                                <span>Mensal</span><abbr
                                    class="select2-search-choice-close select2-display-none"></abbr>
                                <div><b></b></div>
                            </a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen13"></div>
                        <select name="subscriptionCycle" id="subscriptionCycle"
                            class="input-xxlarge js-subscription-cycle select2-offscreen" data-constraint="select"
                            tabindex="-1">
                            <option value="WEEKLY">Semanal</option>
                            <option value="BIWEEKLY">Quinzenal</option>
                            <option value="MONTHLY" selected="selected">Mensal</option>
                            <option value="BIMONTHLY">Bimestral</option>
                            <option value="QUARTERLY">Trimestral</option>
                            <option value="SEMIANNUALLY">Semestral</option>
                            <option value="YEARLY">Anual</option>
                        </select>
                    </div>
                </div>

                <div class="icarus-control-group">
                    <label for="subscriptionValue" class="control-label">Com valor fixo de</label>
                    <div class="controls">
                        <div class="icarus-input-prepend prepend-currency">
                            <input type="text" id="subscriptionValue" name="subscriptionValue"
                                class="input-xxlarge js-subscription-value" autocomplete="off" validate-required="true"
                                maxlength="10" data-constraint="money" placeholder="0,00">
                        </div>
                    </div>
                </div>
            </div>

            <div class="icarus-inline-group">
                <div class="icarus-control-group">
                    <label for="dueDate" class="control-label">
                        Vencimento da
                        <span class="js-control-label-for-detached hide"> cobrança </span>
                        <span class="js-control-label-for-installment-subscription"> primeira cobrança </span>
                    </label>
                    <div class="controls">
                        <input type="text" id="dueDate" name="subscriptionDueDate" class="input-xxlarge js-due-date"
                            data-constraint="datepicker" validate-required="true" placeholder="__/__/__"
                            autocomplete="off" maxlength="10">
                    </div>
                </div>

                <div class="icarus-control-group js-group-end-date">
                    <label for="endDate" class="control-label">
                        Data de fim de assinatura
                    </label>
                    <div class="controls">
                        <input type="text" id="endDate" name="endDate" class="input-xxlarge js-end-date"
                            data-constraint="datepicker" placeholder="__/__/__" autocomplete="off" maxlength="10">
                    </div>
                </div>
            </div>

            <div class="icarus-section-title">Juros e multa</div>

            <div class="sub-control-box">
                <div class="icarus-inline-group">
                    <div class="icarus-control-group">
                        <label for="interest-value" class="control-label">Juros ao mês
                            <i class="icarus-tip tip asaas-icon ai-info-circle ai-2x  "
                                data-original-title="Os juros acumulativos serão somados diariamente ao valor da parcela até o pagamento"
                                data-placement="top"></i>


                        </label>
                        <div class="controls">
                            <div class="icarus-input-prepend prepend-percent">
                                <input type="text" placeholder="Insira o percentual" name="interest.value"
                                    id="interest-value" value="0,00" data-constraint="percentage"
                                    class="input-xxlarge js-percent-value" maxlength="5" validate-type="money"
                                    data-max-value="10" data-max-error-message="O valor máximo de juros é 10% ao mês.">
                            </div>
                        </div>
                    </div>

                    <div class="icarus-control-group">
                        <label class="control-label">Valor fixo de juros ao mês</label>
                        <div class="controls">
                            <div class="icarus-input-prepend prepend-currency">
                                <input type="text" placeholder="0,00" disabled="" data-constraint="money"
                                    class="input-xxlarge js-fixed-value" maxlength="10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sub-control-box js-icarus-sub-box-type">
                <div class="icarus-control-group">
                    <label for="s2id_autogen14" class="control-label">Multa por atraso
                        <i class="icarus-tip tip asaas-icon ai-info-circle ai-2x  "
                            data-original-title="A multa será somada ao valor da parcela caso o pagamento seja feito após a data do vencimento."
                            data-placement="top"></i>


                    </label>
                    <div class="controls">
                        <div class="select2-container input-xxlarge js-icarus-select-type js-fine-type icarus-select-container"
                            id="s2id_fine-type" style="width: 320px;"><a href="javascript:void(0)"
                                onclick="return false;" class="select2-choice icarus-select-choice" tabindex="-1">
                                <span>Percentual</span><abbr
                                    class="select2-search-choice-close select2-display-none"></abbr>
                                <div><b></b></div>
                            </a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen14">
                            <div
                                class="select2-drop select2-display-none icarus-select-dropdown select2-with-searchbox">
                                <div class="select2-search"> <input type="text" autocomplete="off"
                                        class="select2-input icarus-select-input"> </div>
                                <ul class="select2-results icarus-select-results"> </ul>
                            </div>
                        </div><select id="fine-type" name="fine.fineType"
                            class="input-xxlarge js-icarus-select-type js-fine-type select2-offscreen"
                            data-constraint="select" tabindex="-1">
                            <option value="FIXED">Valor fixo</option>
                            <option value="PERCENTAGE" selected="selected">Percentual</option>
                        </select>
                    </div>
                </div>

                <div class="icarus-inline-group">
                    <div class="icarus-control-group">
                        <label for="fine-value" class="control-label">Valor <span
                                class="js-icarus-type-control-label">percentual</span> da multa</label>
                        <div class="controls">
                            <div class="icarus-input-prepend prepend-percent js-icarus-input-prepend">
                                <input type="text" id="fine-value" placeholder="Insira o percentual" name="fine.value"
                                    class="input-xxlarge js-input-type-value js-percent-value" data-constraint="money"
                                    value="0,00" maxlength="5">
                            </div>
                        </div>
                    </div>

                    <div class="icarus-control-group js-icarus-fixed-control-group-type">
                        <label class="control-label">Valor fixo da multa</label>
                        <div class="controls">
                            <div class="icarus-input-prepend prepend-currency">
                                <input type="text" placeholder="0,00" disabled="" data-constraint="money"
                                    class="input-xxlarge js-fixed-value" value="0,00" maxlength="10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="icarus-section-title">Desconto</div>

            <div class="sub-control-box js-icarus-sub-box-type">
                <div class="icarus-control-group">
                    <label for="s2id_autogen15" class="control-label">Desconto
                        <i class="icarus-tip tip asaas-icon ai-info-circle ai-2x  "
                            data-original-title="O desconto é aplicado em cada parcela da cobrança."
                            data-placement="top"></i>


                    </label>
                    <div class="controls">
                        <div class="select2-container input-xxlarge js-icarus-select-type js-discount-type icarus-select-container"
                            id="s2id_discount-type" style="width: 320px;"><a href="javascript:void(0)"
                                onclick="return false;" class="select2-choice icarus-select-choice" tabindex="-1">
                                <span>Percentual</span><abbr
                                    class="select2-search-choice-close select2-display-none"></abbr>
                                <div><b></b></div>
                            </a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen15">
                            <div
                                class="select2-drop select2-display-none icarus-select-dropdown select2-with-searchbox">
                                <div class="select2-search"> <input type="text" autocomplete="off"
                                        class="select2-input icarus-select-input"> </div>
                                <ul class="select2-results icarus-select-results"> </ul>
                            </div>
                        </div><select name="discount.discountType" id="discount-type"
                            class="input-xxlarge js-icarus-select-type js-discount-type select2-offscreen"
                            data-constraint="select" tabindex="-1">
                            <option value="FIXED">Valor fixo</option>
                            <option value="PERCENTAGE" selected="selected">Percentual</option>
                        </select>
                    </div>
                </div>

                <div class="icarus-inline-group">
                    <div class="icarus-control-group">
                        <label for="discount-value" class="control-label">Valor <span
                                class="js-icarus-type-control-label">percentual</span> do desconto</label>
                        <div class="controls">
                            <div class="icarus-input-prepend prepend-percent js-icarus-input-prepend">
                                <input type="text" id="discount-value" placeholder="Insira o percentual"
                                    name="discount.value" maxlength="5"
                                    class="input-xxlarge js-input-type-value js-percent-value" value="0,00"
                                    data-constraint="money">
                            </div>
                        </div>
                    </div>
                    <div class="icarus-control-group js-icarus-fixed-control-group-type">
                        <label class="control-label">Valor fixo do desconto</label>
                        <div class="controls">
                            <div class="icarus-input-prepend prepend-currency">
                                <input type="text" placeholder="0,00" disabled="" maxlength="10"
                                    class="input-xxlarge js-fixed-value" value="0,00" data-constraint="money">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="icarus-control-group js-due-date-limit-days-control-group">
                    <label for="s2id_autogen16" class="control-label">Prazo máximo do desconto
                        <i class="icarus-tip tip asaas-icon ai-info-circle ai-2x  "
                            data-original-title="Após este prazo, o desconto não será mais válido."
                            data-placement="top"></i>


                    </label>
                    <div class="controls">
                        <div class="select2-container input-xxlarge js-due-date-limit-days disabled icarus-select-container"
                            id="s2id_discount-dueDateLimitDays" style="width: 320px;"><a href="javascript:void(0)"
                                onclick="return false;" class="select2-choice icarus-select-choice" tabindex="-1">
                                <span>Selecione o prazo de desconto</span><abbr
                                    class="select2-search-choice-close select2-display-none"></abbr>
                                <div><b></b></div>
                            </a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen16">
                            <div
                                class="select2-drop select2-display-none icarus-select-dropdown select2-with-searchbox">
                                <div class="select2-search"> <input type="text" autocomplete="off"
                                        class="select2-input icarus-select-input"> </div>
                                <ul class="select2-results icarus-select-results"> </ul>
                            </div>
                        </div><select name="discount.dueDateLimitDays" id="discount-dueDateLimitDays"
                            class="input-xxlarge js-due-date-limit-days disabled select2-offscreen"
                            data-constraint="select" tabindex="-1">
                            <option value="">Selecione o prazo de desconto</option>
                        </select>
                    </div>
                </div>
                <div id="disabled-discount-message"
                    class="js-disabled-discount-message help-block note marg-t-5 marg-b-0 hide"><i
                        class="fa fa-info-circle"></i> <span class="message"></span></div>

            </div>

            <div class="icarus-control-group">
                <label class="control-label" for="description">Descrição</label>
                <div class="controls">
                    <textarea maxlength="500" class="add-payment-description-field" name="description" id="description"
                        rows="3"></textarea>
                    <div class="icarus-note">A descrição informada será impressa no boleto.</div>
                </div>
            </div>

            <div class="checkbox-container">
                <div class="js-box-print-payment" style="display: none;">
                    <div class="icheckbox_flat-aero"><input type="checkbox" name="printPayment" id="printPayment"
                            class="icheck js-print-payment" data-constraint="checkbox"
                            style="position: absolute; opacity: 0;"><ins class="iCheck-helper"
                            style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                    <label class="control-label" for="printPayment">Quero <b>imprimir</b> esta cobrança</label>
                </div>

                <div class="js-box-postal-service">
                    <div class="icheckbox_flat-aero disabled"><input type="checkbox" name="sendPaymentByPostalService"
                            id="sendPaymentByPostalService" class="icheck js-send-payment-by-postal-service"
                            data-constraint="checkbox" disabled="" style="position: absolute; opacity: 0;"><ins
                            class="iCheck-helper"
                            style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                    <label class="control-label" for="sendPaymentByPostalService">Quero enviar esta cobrança via
                        <b>Correios</b><a
                            href="https://ajuda.asaas.com/boleto-bancario/como-enviar-um-boleto-por-correios"
                            target="_blank" rel="noopener noreferrer">
                            <i class="asaas-icon ai-question-circle ai-2x  "></i>


                        </a></label>
                    <div class="js-box-message postal-service-box-message hide" id="box-message">
                        <span class="js-warning-postal-service-message">

                            <i class="asaas-icon ai-info-circle ai-2x js-postal-service-icon-info "></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="message"></div>
    </form>

    <div id="app">
       
    </div>

    <script>

        const vm = new Vue({
            el: '#app',
            data: {
                cor: 'branco',
                posicaoX: 0,
                posicaoY: 0
            },
            methods: {
                mudarCor(c) {
                    this.cor = c
                },
                coordenadas(e) {
                    this.posicaoX = e.clientX
                    this.posicaoY = e.clientY
                }
            }
        })

    </script>
</body>

</html>