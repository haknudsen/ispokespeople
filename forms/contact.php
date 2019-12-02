                    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
                    <form id="__vtigerWebForm" name="iSpokespeople" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"><input type="hidden" name="__vtrftk" value="sid:7c5f38a1d3fbca282c940a5650a5e0765bbae8bf,1575326916">
                        <input type="hidden" name="publicid" value="d12616aa40328546dac41c10d2852912">
                        <input type="hidden" name="urlencodeenable" value="1">
                        <input type="hidden" name="name" value="iSpokespeople">
                         <input type="hidden" name="__vtCurrency" value="1">
                                                <table>
                                                                                                                                                            								                                <tbody><tr>
                                									<td>
										<label>
																																																								Last Name
											*										</label>
									</td>
								                                <td>
									                                                                                                                                                                                                                                    <input type="text" name="lastname" maxlength="80" data-label="" value="" required="">                                                                    </td></tr>
                                                                                                                                                            								                                <tr>
                                									<td>
										<label>
																																																								Primary Email
											*										</label>
									</td>
								                                <td>
									                                                                                                                                                                                             <input type="email" name="email" data-label="Primary Email" value="" required="" <="" td=""></td></tr>
                                                                                                                                                            								                                <tr>
                                									<td>
										<label>
																																																								Email Opt-in
																					</label>
									</td>
								                                <td>
																													                                                                                                                                                    <input type="hidden" name="emailoptin" data-label="" value="0">
                                                                                    <input type="checkbox" name="emailoptin" data-label="" value="1">
                                                                                                            </td></tr>
                                                                                                                                                            								                                <tr>
                                									<td>
										<label>
																																																								Primary Phone
											*										</label>
									</td>
								                                <td>
									                                                                                                                                                                                                                                    <input type="text" name="phone" maxlength="50" data-label="" value="" required="">                                                                    </td></tr>
                                                                                                                                                            								                                <tr>
                                                                <td>
									                                            
                                                                                                                                                                                                                                                                        <input type="hidden" name="cf_1001" maxlength="255" data-label="" value="http://www.ispokespeople.com/">                                                                    </td></tr>
                                                                                                                                                            								                                <tr>
                                									<td>
										<label>
																																																								Description
																					</label>
									</td>
								                                <td>
									                                                                                <textarea name="description"></textarea>
                                                                                                                                            </td></tr>
                                                                                </tbody></table>
                                                <input class="btn btn-custom" type="submit" value="Submit" id="vtigerFormSubmitBtn">
                    </form>
                <script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.getElementById("__vtigerWebForm"), inputs = form.elements; form.onsubmit = function() { document.getElementById("vtigerFormSubmitBtn").disabled=true;var required = [], att, val; var startDate;var endDate;var endDate1;for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(inputs[i].name == "birthday"){birthdayDate = new Date(inputs[i].value);todayDate = new Date();todayDate.setHours(0,0,0,0);birthdayDate.setHours(0,0,0,0);if(birthdayDate >= todayDate){alert("Date of Birth should be less than Today's Date.");document.getElementById("vtigerFormSubmitBtn").disabled=false;return false;}}if(inputs[i].name=="support_start_date" || inputs[i].name=="startdate"){startDate = inputs[i].value;}if(inputs[i].name=="support_end_date" || inputs[i].name=="targetenddate" || inputs[i].name=="enddate"){endDate = inputs[i].value;}if(inputs[i].name=="actualenddate"){endDate1 = inputs[i].value;}if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("data-label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); document.getElementById("vtigerFormSubmitBtn").disabled=false; return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters"); document.getElementById("vtigerFormSubmitBtn").disabled=false; return false;}}}if(startDate){if(typeof startDate !== "undefined") {if(endDate){if(typeof endDate !== "undefined") {startDate = new Date(startDate);endDate = new Date(endDate);if(endDate < startDate){alert("End Date should be greater than or equal to Start Date");document.getElementById("vtigerFormSubmitBtn").disabled = false;return false;}}}if(endDate1){if(typeof endDate1 !== "undefined") {startDate = new Date(startDate);endDate1 = new Date(endDate1);if(endDate1 < startDate){alert("End Date should be greater than or equal to Start Date");document.getElementById("vtigerFormSubmitBtn").disabled = false;return false;}}}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); document.getElementById("vtigerFormSubmitBtn").disabled=false;return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");var elemDataType = numberTypeInputs[i].getAttribute("datatype");if(val != "") {if(elemDataType == "double") {var numRegex = /^[+-]?\d+(\.\d+)?$/;}else{var numRegex = /^[+-]?\d+$/;}if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); document.getElementById("vtigerFormSubmitBtn").disabled=false; return false;}}}var dateTypeInputs = document.querySelectorAll("input[type=date]");for (var i = 0; i < dateTypeInputs.length; i++) {dateVal = dateTypeInputs[i].value;var elemLabel = dateTypeInputs[i].getAttribute("label");if(dateVal != "") {var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;if(!dateRegex.test(dateVal)) {alert("For "+ elemLabel +" field please enter valid date in required format"); document.getElementById("vtigerFormSubmitBtn").disabled=false; return false;}}}var inputElems = document.getElementsByTagName("input");var totalFileSize = 0;for(var i = 0; i < inputElems.length; i++) {if(inputElems[i].type.toLowerCase() === "file") {var file = inputElems[i].files[0];if(typeof file !== "undefined") {var totalFileSize = totalFileSize + file.size;}}}if(totalFileSize > 52428800) {alert("Maximum allowed file size including all files is 50MB.");document.getElementById("vtigerFormSubmitBtn").disabled=false;return false;}var inputElem = document.querySelectorAll("input[type=file]");var fileSize = 0;for(var i = 0; i < inputElem.length; i++) {if(inputElem[i].type.toLowerCase() ===  "file") {if(inputElem[i].hasAttribute("selectedTypeImage")) {var imageFile = inputElem[i].files[0];var fileSize = imageFile.size;}}if(fileSize > 5242880) {alert("Maximum allowed image size is 5MB.");document.getElementById("vtigerFormSubmitBtn").disabled=false;return false;}}}; }</script>