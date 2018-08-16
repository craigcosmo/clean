<template>
    <div>
        <div class="iframe_container hidden" align="middle">
            <iframe src="javascript:false" name="0" id="0" frameborder="0" width="600" height="600" ></iframe>
        </div>
        <div class="row failure hidden">
            <div class="col-md-offset-2 col-md-8">
                <div class="alert alert-danger" role="alert">
                    <strong class="failing"></strong><span class="errortext"></span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data'],

        created() {
            this.check_extensions();
            this.deposit();
        },

        methods: {
            reset() {
                $('.iframe_container > iframe').addClass('hidden');
                $('.failure').addClass('hidden');
            },

            failure(failing, errortext) {
                $('.failure .failing').text(failing);
                $('.failure .errortext').text(errortext);
                $('.failure').removeClass('hidden');
            },

            deposit() {
                this.reset();

                $.ajax({
                    contentType: 'application/json; charset=UTF-8',
                    data: {
                        'shares': this.data.shares,
                        'id': this.data.issue_id,
                        'invest_as_company' : this.data.invest_as_company,
                        'gift_card_id' : this.data.gift_card_id
                    },
                    dataType: 'json',
                    error: function (jqXHR, textStatus, errorThrown) {
                        $('.failure .failing').text('Failed to make deposit call');
                        $('.failure .errortext').text(textStatus);
                        $('.failure').removeClass('hidden');
                    },
                    success: function (data, textStatus, jqXHR) {
                        if(data.result == 'ok') {
                            //document.location=data.url;
                            $('.iframe_container > iframe').prop('src', data.url).removeClass('hidden');

                            $('.iframe_container').removeClass('hidden');
                        } else {
                            $('.failure .failing').text('Failed to make deposit call');
                            $('.failure .errortext').text(data.error);
                            $('.failure').removeClass('hidden');
                        }
                    },
                    type: 'GET',
                    url: '/invest/payment/trustly/deposit',
                });
            },

            _build_object_dl(data) {
                var dl = document.createElement('DL');
                for (var property in data) {
                    if (data.hasOwnProperty(property) && property != 'datestamp') {
                        var dd = document.createElement('DD');
                        var dt = document.createElement('DT');
                        dt.innerHTML = property;
                        if(typeof(data[property]) == 'object') {
                            var idl = _build_object_dl(data[property]);
                            dd.appendChild(idl);
                        } else {
                            dd.innerHTML = data[property];
                        }
                        dl.appendChild(dt);
                        dl.appendChild(dd);
                    }
                }
                return dl;
            },

            _build_notification_td(td, data) {
                td.children().remove();

                if(!data) {
                    return ;
                }

                td.text(data.datestamp);
                var dl = _build_object_dl(data);
                td.append($(dl));
            },

            check_extensions() {
                this.reset();
                $.ajax({
                    contentType: 'application/json; charset=UTF-8',
                    data: null,
                    dataType: 'json',
                    error: function (jqXHR, textStatus, errorThrown) {
                        failure('Failed to get PHP extension information', errorThrown.statusText);
                    },
                    success: function (data, textStatus, jqXHR) {
                        var missing = false;
                        for(extension in data.extensions) {
                            if(!data.extensions[extension]) {
                                missing = true;
                            }
                        }
                        if(missing) {
                            var $ul = $('#missing-modules > ul');
                            for(extension in data.extensions) {
                                var text = extension + ': ' + (data.extensions[extension]?'installed':'missing');

                                var li = document.createElement('LI');
                                li.innerHTML = text;
                                $ul.append(li);
                            }

                            $('.extensions-ok').addClass('hidden');
                            $('.extensions-not-ok').removeClass('hidden');
                        } else {
                            //update_orders();
                            //window.setInterval(update_orders, 3000);
                        }
                    },
                    type: 'GET',
                    url: '/invest/payment/trustly/extensions',
                });
            }

        }
    }
</script>
