<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title></title>
</head>

<body>
    <form accept-charset="utf-8" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" enctype="multipart/form-data" id="__vtigerWebForm" method="post" name="iSpokespeople">
        <input name="__vtrftk" type="hidden" value="sid:c3b4b895a5719f377572391d586f651519c80be6,1553795507"> <input name="publicid" type="hidden" value="d12616aa40328546dac41c10d2852912"> <input name="urlencodeenable" type="hidden" value="1"> <input name="name" type="hidden" value="iSpokespeople"> <input name="__vtCurrency" type="hidden" value="1">
        <table>
            <tbody>
                <tr>
                    <td><label>Name</label>
                    </td>
                    <td><input data-label="" maxlength="80" name="lastname" required="" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <td><label>Primary Email *</label>
                    </td>
                    <td><input data-label="Primary Email" name="email" required="" type="email" value="">
                    </td>
                </tr>
                <tr>
                    <td><label>Email Opt-in *</label>
                    </td>
                    <td><input data-label="" name="emailoptin" type="hidden" value="0"> <input data-label="" name="emailoptin" type="checkbox" value="1">
                    </td>
                </tr>
                <tr>
                    <td><label>Primary Phone *</label>
                    </td>
                    <td><input data-label="" maxlength="50" name="phone" required="" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <td><input data-label="" maxlength="255" name="cf_1001" type="hidden" value="http://www.ispokespeople.com/">
                    </td>
                </tr>
                <tr>
                    <td><label>Message</label>
                    </td>
                    <td>
                        <textarea name="description"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <script src="https://www.google.com/recaptcha/api.js">
        </script>
        <div class="g-recaptcha" data-sitekey="6LcmdSATAAAAAGWw734vGo0AXQwuxJS7RmDZA_Fe"></div><input id="captchaUrl" type="hidden" value="https://websitetalkingheads.od1.vtiger.com/modules/Settings/Webforms/actions/ValidateCaptcha.php"> <input id="recaptcha_validation_value" name="recaptcha_validation_value" type="hidden">
        <div class="text-center">
            <input id="vtigerFormSubmitBtn" type="submit" value="Submit" class="btn btn-custom">
        </div>
    </form>
    <script type="text/javascript">
        window.onload = function () {
            var N = navigator.appName,
                ua = navigator.userAgent,
                tem;
            var M = ua.match( /(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i );
            if ( M && ( tem = ua.match( /version\/([\.\d]+)/i ) ) != null ) M[ 2 ] = tem[ 1 ];
            M = M ? [ M[ 1 ], M[ 2 ] ] : [ N, navigator.appVersion, "-?" ];
            var browserName = M[ 0 ];
            var form = document.getElementById( "__vtigerWebForm" ),
                inputs = form.elements;
            form.onsubmit = function () {
                document.getElementById( "vtigerFormSubmitBtn" ).disabled = true;
                var required = [],
                    att, val;
                var startDate;
                var endDate;
                var endDate1;
                for ( var i = 0; i < inputs.length; i++ ) {
                    att = inputs[ i ].getAttribute( "required" );
                    val = inputs[ i ].value;
                    type = inputs[ i ].type;
                    if ( inputs[ i ].name == "birthday" ) {
                        birthdayDate = new Date( inputs[ i ].value );
                        todayDate = new Date();
                        todayDate.setHours( 0, 0, 0, 0 );
                        birthdayDate.setHours( 0, 0, 0, 0 );
                        if ( birthdayDate >= todayDate ) {
                            alert( "Date of Birth should be less than Today's Date." );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false;
                        }
                    }
                    if ( inputs[ i ].name == "support_start_date" || inputs[ i ].name == "startdate" ) {
                        startDate = inputs[ i ].value;
                    }
                    if ( inputs[ i ].name == "support_end_date" || inputs[ i ].name == "targetenddate" || inputs[ i ].name == "enddate" ) {
                        endDate = inputs[ i ].value;
                    }
                    if ( inputs[ i ].name == "actualenddate" ) {
                        endDate1 = inputs[ i ].value;
                    }
                    if ( type == "email" ) {
                        if ( val != "" ) {
                            var elemLabel = inputs[ i ].getAttribute( "data-label" );
                            var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;
                            var illegalChars = /[\(\)\<\>\,\;\:\"\[\]]/;
                            if ( !emailFilter.test( val ) ) {
                                alert( "For " + elemLabel + " field please enter valid email address" );
                                document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                                return false;
                            } else if ( val.match( illegalChars ) ) {
                                alert( elemLabel + " field contains illegal characters" );
                                document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                                return false;
                            }
                        }
                    }
                    if ( startDate ) {
                        if ( typeof startDate !== "undefined" ) {
                            if ( endDate ) {
                                if ( typeof endDate !== "undefined" ) {
                                    startDate = new Date( startDate );
                                    endDate = new Date( endDate );
                                    if ( endDate < startDate ) {
                                        alert( "End Date should be greater than or equal to Start Date" );
                                        document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                                        return false;
                                    }
                                }
                            }
                            if ( endDate1 ) {
                                if ( typeof endDate1 !== "undefined" ) {
                                    startDate = new Date( startDate );
                                    endDate1 = new Date( endDate1 );
                                    if ( endDate1 < startDate ) {
                                        alert( "End Date should be greater than or equal to Start Date" );
                                        document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                                        return false;
                                    }
                                }
                            }
                        }
                    }
                    if ( att != null ) {
                        if ( val.replace( /^\s+|\s+$/g, "" ) == "" ) {
                            required.push( inputs[ i ].getAttribute( "label" ) );
                        }
                    }
                }
                if ( required.length > 0 ) {
                    alert( "The following fields are required: " + required.join() );
                    document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                    return false;
                }
                var numberTypeInputs = document.querySelectorAll( "input[type=number]" );
                for ( var i = 0; i < numberTypeInputs.length; i++ ) {
                    val = numberTypeInputs[ i ].value;
                    var elemLabel = numberTypeInputs[ i ].getAttribute( "label" );
                    var elemDataType = numberTypeInputs[ i ].getAttribute( "datatype" );
                    if ( val != "" ) {
                        if ( elemDataType == "double" ) {
                            var numRegex = /^[+-]?\d+(\.\d+)?$/;
                        } else {
                            var numRegex = /^[+-]?\d+$/;
                        }
                        if ( !numRegex.test( val ) ) {
                            alert( "For " + elemLabel + " field please enter valid number" );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false;
                        }
                    }
                }
                var dateTypeInputs = document.querySelectorAll( "input[type=date]" );
                for ( var i = 0; i < dateTypeInputs.length; i++ ) {
                    dateVal = dateTypeInputs[ i ].value;
                    var elemLabel = dateTypeInputs[ i ].getAttribute( "label" );
                    if ( dateVal != "" ) {
                        var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;
                        if ( !dateRegex.test( dateVal ) ) {
                            alert( "For " + elemLabel + " field please enter valid date in required format" );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false;
                        }
                    }
                }
                var inputElems = document.getElementsByTagName( "input" );
                var totalFileSize = 0;
                for ( var i = 0; i < inputElems.length; i++ ) {
                    if ( inputElems[ i ].type.toLowerCase() === "file" ) {
                        var file = inputElems[ i ].files[ 0 ];
                        if ( typeof file !== "undefined" ) {
                            var totalFileSize = totalFileSize + file.size;
                        }
                    }
                }
                if ( totalFileSize > 52428800 ) {
                    alert( "Maximum allowed file size including all files is 50MB." );
                    document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                    return false;
                }
                var inputElem = document.querySelectorAll( "input[type=file]" );
                var fileSize = 0;
                for ( var i = 0; i < inputElem.length; i++ ) {
                    if ( inputElem[ i ].type.toLowerCase() === "file" ) {
                        if ( inputElem[ i ].hasAttribute( "selectedTypeImage" ) ) {
                            var imageFile = inputElem[ i ].files[ 0 ];
                            var fileSize = imageFile.size;
                        }
                    }
                    if ( fileSize > 5242880 ) {
                        alert( "Maximum allowed image size is 5MB." );
                        document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                        return false;
                    }
                }
                document.getElementById( "vtigerFormSubmitBtn" ).disabled = true;
                var recaptchaValidationValue = document.getElementById( "recaptcha_validation_value" ).value;
                if ( recaptchaValidationValue != true ) {
                    var recaptchaResponse = document.getElementsByName( "g-recaptcha-response" )[ 0 ].value;
                    var currentUrl = window.location.href;
                    var urlHash = window.location.hash;
                    currentUrl = currentUrl.replace( urlHash, "" );
                    currentUrl = currentUrl.replace( "#", "" );
                    var validationUrl = document.getElementById( "captchaUrl" ).value + "?recaptcha_response=" + recaptchaResponse + "&current_url=" + currentUrl + "&callback=captchaCallback";
                    jsonp.fetch( validationUrl );
                    return false;
                }
            };
        };
        var jsonp = {
            callbackCounter: 0,
            fetch: function ( url ) {
                url = url + "&callId=" + this.callbackCounter;
                var scriptTag = document.createElement( "SCRIPT" );
                scriptTag.src = url;
                scriptTag.async = true;
                scriptTag.id = "captchaCallback_" + this.callbackCounter;
                scriptTag.type = "text/javascript";
                document.getElementsByTagName( "HEAD" )[ 0 ].appendChild( scriptTag );
                this.callbackCounter++;
            }
        };

        function captchaCallback( data ) {
            if ( data.result.success == true ) {
                document.getElementById( "recaptcha_validation_value" ).value = true;
                var form = document.getElementById( "__vtigerWebForm" );
                form.submit();
            } else {
                document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                grecaptcha.reset();
                alert( "Captcha not verified. Please verify captcha." );
            }
            var element = document.getElementById( "captchaCallback_" + data.result.callId );
            element.parentNode.removeChild( element );
        }
    </script>
</body>
</html>