
	$(document).ready(function () {
		ajax_DashboardData();
	});

	// Dashboard Data Ajax Call
	function ajax_DashboardData(){

		App.blockUI({target: ".indiandashcontainer", animate: true});
		setDate();
		start = getDate('START');
		end = getDate('END');
		var divArr = ['site_statistics_in', 'site_activities_in', 'div_piechart_indian', 'div_barchart_indian', 'chart3_div_in', 'method_div_indian', 'site_statistics', 'site_activities', 'div_piechart', 'div_barchart', 'chart3_div', 'method_div'];

		$.each(divArr, function (index) {
			$('#' + divArr[index] + '_content').hide();
			$('#' + divArr[index] + '_loading').show();
		});
		customer_id = $('#customer_id').val();
		merchant_id = $('#merchant_id').val();
		mrl_no = $('#mrl_no').val();
		mid = $('#mid').val();
		tid = $('#tid').val();


		$.ajax({
			type: "GET",
			url: "{{ route('dashboard.data')}}",
			data: {
				start: start,
				end: end,

				customer_id: customer_id,
				merchant_id: merchant_id,
				mrl_no: mrl_no,
				mid: mid,
				tid: tid
			},
			success: function (data) {

				var responseData = JSON.parse(data);
				total_sale_volume = responseData['total_sale_volume'].toLocaleString("en-IN");
				total_sale_count = responseData['total_sale_count'].toLocaleString("en-IN");


				$("#sale_volume").html('<i class="fa fa-rupee"></i>' + total_sale_volume);
				$("#sale_count").text(total_sale_count);


				var divid = "site_statistics_in";
				var dividCnt = "site_activities_in";
				var dividCard = "div_piechart_indian";
				var dividMet = "method_div_indian";
				var prefix = '\u20b9';

				ajaxSaleVolume(divid, prefix, responseData['date_wise_sale_volume']);
				ajaxTransactions(dividCnt, responseData['date_wise_sale_count']);
				ajaxCardType(dividCard, prefix, responseData['card_type_sale_amount']);
				ajaxTransactionMethod(dividMet,prefix, responseData['method_sale_amount']);
				App.unblockUI('.indiandashcontainer');
			}
		});

		$.ajax({
			type: "GET",
			url: "{{ route('dashboard.merchant.data')}}",
			data: {
				start: start,
				end: end,
				customer_id: customer_id,
				merchant_id: merchant_id,
				mrl_no: mrl_no,
				mid: mid,
				tid: tid
			},
			success: function (data) {

				var responseData = JSON.parse(data);

				merchant_count = responseData['merchant_count'];//.toLocaleString("en-IN");


				$("#merchant_count").html(merchant_count);


				var dividMer = "chart3_div_in";


				ajaxNewMerchant(dividMer,responseData['date_wise_merchant_count']);

				App.unblockUI('.indiandashcontainer');
			}
		});
		$.ajax({
			type: "GET",
			url: "{{ route('dashboard.transaction.mode.data')}}",
			data: {
				start: start,
				end: end,

				customer_id: customer_id,
				merchant_id: merchant_id,
				mrl_no: mrl_no,
				mid: mid,
				tid: tid
			},
			success: function (data) {

				var responseData = JSON.parse(data);

				var dividMod = "div_barchart_indian";
				var prefix = '\u20b9';


				ajaxTransactionMode(dividMod,prefix, responseData['date_wise_mode_amount']);

				App.unblockUI('.indiandashcontainer');
			}
		});

	}

	// New Merchants Graph Loading
	function ajaxNewMerchant(divid, date_wise_merchant_count) {
		var portal = 'INDIA';
		$('#' + divid + '_content').hide();
		$('#' + divid + '_loading').show();
		if (date_wise_merchant_count != '') {

			if (date_wise_merchant_count != 0) {
				AmCharts.makeChart(divid,
								   {
					"type": "serial",
					"mouseWheelZoomEnabled": true,
					"categoryField": "label",
					"dataDateFormat": "YYYY-MM-DD",
					"startDuration": 0,
					"autoDisplay": true,
					"theme": "light",
					"color": "#a9a6a6",
					"colors": ["#3faba4"],
					"export": {
						"enabled": false,
					},
					"valueAxes": [{
						"axisColor": "#888888",
						"integersOnly": true,
						"labelFunction": function (value, valueString, valueAxis) {
							return getLocaleFormat(value, portal);
						},
					}],
					"categoryAxis": {
						"gridPosition": "start",
						"parseDates": true,
						"axisColor": "#888888",
					},
					"chartCursor": {
						"enabled": true,
						"cursorColor": "#a9a6a6",
					},
					"graphs": [{
						"balloonText": "[[value]]",
						"balloonFunction": function (graphDataItem, graph) {
							var value = graphDataItem.values.value;
							return getLocaleFormat(value, portal);
						},
						"fillAlphas": 1,
						"id": "AmGraph-1",
						"title": "graph 1",
						"type": "column",
						"valueField": "value"
					}],
					"dataProvider": date_wise_merchant_count
				});
			}
			else
				makeNoData(divid);
		}
		else
			makeNoData(divid);
		$('#' + divid + '_content').show();
		$('#' + divid + '_loading').hide();
	}

	// Transactions Mode Graph Loading
	function ajaxTransactionMode(divid, prefix,date_wise_mode_amount) {
		var portal = 'INDIA';
		if (date_wise_mode_amount != '') {
			if (date_wise_mode_amount != 0) {
				AmCharts.makeChart(divid,
								   {
					"type": "serial",
					"categoryField": "label",
					"rotate": true,
					"angle": 30,
					"color": "#b2a4a4",
					"depth3D": 30,
					"export": {
						"enabled": false,
					},
					"colors": ["#4C87B9", "#44B6AE", "#E35B5A", "#525E64"],
					"startDuration": 0,
					"categoryAxis": {
						"axisColor": "#888888",
					},
					"graphs": [
						{
							"balloonText": "[[title]] : [[percents]]% ( [[value]] )",
							"balloonFunction": function (graphDataItem, graph) {
								var value = graphDataItem.values.value;
								return graph.title + " : " + graphDataItem.values.percents.toFixed(2) + "% (" +prefix +" " + getLocaleFormat(value, portal) + " )";
							},
							"fillAlphas": 1,
							"title": "MSR",
							"type": "column",
							"valueField": "MSR"
						},
						{
							"balloonText": "[[title]] : [[percents]]% ( [[value]] )",
							"balloonFunction": function (graphDataItem, graph) {
								var value = graphDataItem.values.value;
								return graph.title + " : " + graphDataItem.values.percents.toFixed(2) + "% (" +prefix +" " + getLocaleFormat(value, portal) + " )";
							},
							"fillAlphas": 1,
							"title": "EMV",
							"type": "column",
							"valueField": "EMV"
						},
						{
							"balloonText": "[[title]] : [[percents]]% ( [[value]] )",
							"balloonFunction": function (graphDataItem, graph) {
								var value = graphDataItem.values.value;
								return graph.title + " : " + graphDataItem.values.percents.toFixed(2) + "% (" +prefix +"" + getLocaleFormat(value, portal) + " )";
							},
							"fillAlphas": 1,
							"title": "CNP",
							"type": "column",
							"valueField": "CNP",
						},
						{
							"balloonText": "[[title]] : [[percents]]% ( [[value]] )",
							"balloonFunction": function (graphDataItem, graph) {
								var value = graphDataItem.values.value;
								return graph.title + " : " + graphDataItem.values.percents.toFixed(2) + "% ( " +prefix +"" + getLocaleFormat(value, portal) + " )";
							},
							"fillAlphas": 1,
							"title": "OTHERS",
							"type": "column",
							"valueField": "OTHERS",
						}

					],
					"valueAxes": [
						{
							"axisColor": "#888888",
							"id": "ValueAxis-1",
							"stackType": "100%",
							"title": " "
						}
					],
					"legend": {
						"maxColumns": 5,
						"markerSize": 13,
						"enabled": true,
						"useGraphSettings": true,
						"clickMarker": function(){ return false },
						"clickLabel": function(){ return false },
					},
					"listeners": [{
						"event": "init",
						"method": function(event) {
							var chart = event.chart;
							for(var x = 0; x < chart.graphs.length; x++) {
								var graph = chart.graphs[x];
								var graphSum = 0;
								for(var i = 0; i < chart.dataProvider.length; i++) {
									graphSum += chart.dataProvider[i][graph.valueField];
								}
								if (graphSum == 0 || isNaN(graphSum) )
									graph.visibleInLegend = false;
							}
						}
					}],
					"dataProvider": date_wise_mode_amount
				});
			}
			else
				makeNoData(divid);
		}
		else
			makeNoData(divid);
		$('#' + divid + '_content').show();
		$('#' + divid + '_loading').hide();
	}

	// Card Type Graph Loading
	function ajaxCardType(divid, prefix, card_type_sale_amount) {
		var portal = 'INDIA';
		if (card_type_sale_amount != '') {
			if (card_type_sale_amount != 0) {
				var pieChart = AmCharts.makeChart(divid,
												  {
					"type": "pie",
					"angle": 12,
					"labelText": "",
					"depth3D": 10,
					"innerRadius": 20,
					"startDuration": 0,
					"titleField": "label",
					"valueField": "value",
					"colors": ["#4C87B9", "#44B6AE", "#E35B5A", "#860949", "#525E64"],
					"export": {
						"enabled": false,
					},
					"legend": {
						"enabled": true,
						"align": "center",
						"markerType": "circle",
						"valueText": "",
						"position": "right",
						"maxColumns": 10,
						"clickMarker": function(){ return false },
						"clickLabel": function(){ return false },
					},
					"dataProvider": card_type_sale_amount,
				});
				pieChart.balloonFunction = function (item, graph) {
					var text = item.title + " : " + item.percents.toFixed(2) + "% ( " +prefix +" "+ getLocaleFormat(item.value.toFixed(2), portal) + " )";
					//var text = item.title + " : " + item.percents.toFixed(2) + "% ( " + getLocaleFormat(item.value.toFixed(2), portal) + " )";
					return text;
				};
			}
			else
				makeNoData(divid);
		}
		else
			makeNoData(divid);
		$('#' + divid + '_content').show();
		$('#' + divid + '_loading').hide();
	}

	// Transactions Graph Loading
	function ajaxTransactions(divid, date_wise_sale_count) {
		var portal = 'INDIA';
		if (date_wise_sale_count != '') {
			if (date_wise_sale_count != 0) {
				AmCharts.makeChart(divid,
								   {
					"type": "serial",
					"mouseWheelZoomEnabled": true,
					"categoryField": "label",
					"color": "#b2a4a4",
					"colors": ["#E7505A"],
					"dataDateFormat": "YYYY-MM-DD",
					"theme": "patterns",
					"chartCursor": {
						"enabled": true,
						"cursorColor": "#a9a6a6",
					},
					"categoryAxis": {
						"parseDates": true,
						"axisColor": "#888888",
					},
					"export": {
						"enabled": false,
					},
					"valueAxes": [{
						"axisColor": "#888888",
						"integersOnly": true,
						"labelFunction": function (value, valueString, valueAxis) {
							return getLocaleFormat(value, portal);

						},
					}],
					"startDuration": 0,
					"trendLines": [],
					"graphs": [{
						"balloonText": "[[value]]",
						"balloonFunction": function (graphDataItem, graph) {
							var value = graphDataItem.values.value;
							return getLocaleFormat(value, portal);
						},
						"bullet": "round",
						"title": "graph 1",
						"type": "smoothedLine",
						"valueField": "value"
					}],
					"legend": {
						"enabled": false,
						"useGraphSettings": true
					},
					"dataProvider": date_wise_sale_count,
				});
			}
			else
				makeNoData(divid);
		}
		else
			makeNoData(divid);
		$('#' + divid + '_content').show();
		$('#' + divid + '_loading').hide();
	}

	// Sales Volume Graph Loading
	function ajaxSaleVolume(divid, prefix, date_wise_sale_volume) {

		var portal = 'INDIA';
		if (date_wise_sale_volume != '') {
			if (date_wise_sale_volume != 0) {

				AmCharts.makeChart(divid,
								   {
					"type": "serial",
					"mouseWheelZoomEnabled": true,
					"export": {
						"enabled": false,
					},
					"precision": 0,
					"categoryField": "label",
					"color": "#b2a4a4",
					"colors": ["#4C87B9"],
					"dataDateFormat": "YYYY-MM-DD",
					"categoryAxis": {
						"parseDates": true,
						"axisColor": "#888888",
						//"minHorizontalGap": 0,
					},
					"chartCursor": {
						"enabled": true,
						"cursorColor": "#a9a6a6",
					},
					"valueAxes": [{
						"axisColor": "#888888",
						//					"unit": prefix,
						"unitPosition": "left",
						"labelFunction": function (value, valueString, valueAxis) {
							return prefix + ' ' + getLocaleFormat(value, portal);

						},
					}],
					"graphs": [{
						"balloonText": "[[value]]",
						"balloonFunction": function (graphDataItem, graph) {
							var value = graphDataItem.values.value;
							return prefix + ' ' + getLocaleFormat(value, portal);
						},
						"fillAlphas": 0.7,
						"title": "",
						"valueField": "value"
					}],
					"dataProvider": date_wise_sale_volume,
				});
			}
			else
				makeNoData(divid);
		}
		else
			makeNoData(divid);
		$('#' + divid + '_content').show();
		$('#' + divid + '_loading').hide();
	}
	
	// Transaction Method Graph Loading
	function  ajaxTransactionMethod(divid,prefix, method_sale_count) {
		var portal = 'INDIA';
		if (method_sale_count != '') {
			if(method_sale_count != 0) {
				var pieMethod = AmCharts.makeChart(divid,
												   {
					"type": "pie",
					"balloonText": "[[title]] : [[percents]]% ( [[value]] )",
					"angle": 12,
					"labelText": "",
					"depth3D": 10,
					//"innerRadius":20,
					"startDuration": 0,
					"titleField": "label",
					"valueField": "value",
					"colors": ["#4C87B9", "#44B6AE", "#E35B5A", "#525E64"],
					"export": {
						"enabled": false,
					},
					"legend": {
						"enabled": true,
						"align": "center",
						"markerType": "circle",
						"valueText": "",
						"position": "right",
						"maxColumns": 10,
						"clickMarker": function(){ return false },
						"clickLabel": function(){ return false },
					},
					"dataProvider": method_sale_count
				});
				pieMethod.balloonFunction = function (item, graph) {
					var text = item.title + " : " + item.percents.toFixed(2) + "% (" +prefix +" " + getLocaleFormat(item.value.toFixed(2), portal) + " )";
					return text;
				};
			}
			else
				makeNoData(divid);
		}
		else
			makeNoData(divid);
		$('#' + divid + '_content').show();
		$('#' + divid + '_loading').hide();
	}
	
	// Sales Volume View More Data Call
	$('#sale_volume_view').click(function () {
		var cnt = $('#sale_volume').html().substr(27);
		ajaxViewMore('sale_volume', '#578EBE', 'Sales Volume', 'fa fa-rupee in_box', cnt, '<?php echo App\Timezone::find(Auth::user()->timezone)->country; ?>','sale_volume_view');
	});

	// Sales Count View More Data Call
	$('#sale_count_view').click(function () {
		var cnt = $('#sale_count').html();
		ajaxViewMore('sale_count', '#E35B5A', 'Transactions', 'fa fa-bar-chart-o', cnt, '<?php echo App\Timezone::find(Auth::user()->timezone)->country; ?>','sale_count_view');
	});
	
	// Merchant Count View More Data Call
	$('#merchant_count_view').click(function () {
		var cnt = $('#merchant_count').html();
		ajaxViewMore('new_merchants', '#44B6AE', 'New Merchants', 'fa fa-users', cnt, '<?php echo App\Timezone::find(Auth::user()->timezone)->country; ?>','merchant_count_view');
	});

	// View More Data Ajax Call
	function ajaxViewMore(type, color, title, icon, count, country,divid) {
		$('#modal_graph').html('<img src="assets-met/global/img/loading-spinner-grey.gif" alt="" class="loading"><span> &nbsp;&nbsp;Loading... </span>');

		setDate();
		var start = getDate('START');
		var end = getDate('END');

		if (count != 0) {
			customer_id = $('#customer_id').val();
			merchant_id = $('#merchant_id').val();
			mrl_no = $('#mrl_no').val();
			mid = $('#mid').val();
			tid = $('#tid').val();

			$.ajax({
				type: "GET",
				url: "{{ route('dashboard.viewmore.data')}}",
				data: {
					start: start,
					end: end,
					type: type,
					portal: country,
					customer_id: customer_id,
					merchant_id: merchant_id,

				},
				success: function (data) {
					responseData = $.parseJSON(data);
					if(responseData != null)
						ajaxMore(type, color, country, responseData);
					else
						makeNoData(divid);
				},
				error: function (xhr, ajaxOptions, thrownError) {
					console.log(xhr.status);
					console.log(thrownError);
				}
			});
		}

		else
			$('#modal_graph').html('<br><br><br><br><center><strong> No Data Available.</strong></center>');

		$('#modal_graph_title').html(title);
		$('#modal_graph_icon').attr('class', icon);
		$('#modal_graph_div').modal('show');
	}
	
	// Get Ajax View More Data and Call More For Load Data
	function ajaxMore(type, color, country, data) {

		var prefix = '';
		if (type == 'sale_volume') {
			if (country == 'INDIA')
				prefix = '\u20b9 ';
			else
				prefix = '$ ';
		}
		AmCharts.makeChart('modal_graph',
						   {
			"pathToImages": "assets/pages/patterns/", // required for grips
			"chartScrollbar": {
				"updateOnReleaseOnly": true
			},
			"mouseWheelZoomEnabled": true,
			"type": "serial",
			"categoryField": "label",
			"startDuration": 0,
			"autoDisplay": true,
			"theme": "light",
			"rotate": true,
			"color": "#a9a6a6",
			"colors": [color],
			"marginRight": 50,
			"marginLeft": 250,
			"export": {
				"enabled": false,
			},
			"valueAxes": [{
				"axisColor": "#888888",
				"integersOnly": true,
				"labelAngle": -30,
				"labelRotation":-45,
				"labelFunction": function (value, valueString, valueAxis) {
					return prefix+' '+getLocaleFormat(value, country);
				},
			}],
			"categoryAxis": {
				"gridPosition": "start",
				//"position": "right",
				"axisColor": "#888888",
				"ignoreAxisWidth": true,
				"autoWrap": true,
				"autoGridCount" : false,
				"gridCount" : 20,
				"labelFunction": function (value, valueString, valueAxis) {
					return value.replace(/&amp;/g,'&');
				},
			},
			"chartCursor": {
				"enabled": true,
				"cursorColor": "#a9a6a6",
			},
			"graphs": [{
				"balloonText": "[[label]] : [[value]]",
				"balloonFunction": function (graphDataItem, graph) {
					var value = graphDataItem.values.value;
					return prefix + getLocaleFormat(value, country);
				},
				"fillAlphas": 1,
				"title": "graph 1",
				"type": "column",
				"valueField": "value",
			}],
			"dataProvider": data
		});
	}

	// Reload The Page
	$(".reload").click(function () {
		App.blockUI({target: ".indiandashcontainer", animate: true});
		ajax_DashboardData();
	});
	
	// Local Call Format Function For Currency in local format
	function getLocaleFormat(value, portal) {
		if (portal == 'indian')
			return parseFloat(value).toLocaleString('en-IN');
		else
			return parseFloat(value).toLocaleString('en-US');
	}

	// Get Specific Date Range Data
	$('#DateRangePicker').on('apply.daterangepicker', function (ev, picker) {
		ajax_DashboardData();
	});
	
	// If No Data
	function makeNoData(divId) {
		$('#' + divId).html('<span style="margin-left:41% !important">No Data Available</span>');
	}

