<?php defined('IN_ECJIA') or exit('No permission resources.');?>
	<div class="modal-header">
		<button class="close" data-dismiss="modal">×</button>
		<h3>查看配送详情</h3>
	</div> 
	<div class="order-wait-grab-detail">
		<div class="modal-body">
			<div class="express_content">
				<div class="express_order">
					<span>配送单号：<font class="ecjiafc-red">{$content.express_sn}</font></span>
					<span>配送状态：<font class="ecjiafc-red"> {if $content.status eq '0'}待抢单{elseif $content.status eq '1'}待取货{elseif $content.status eq '2'}配送中{/if}   </font></span>
					<span>取货距离：<font class="ecjiafc-red">{$content.distance}</font>米</span>
					<span>运费：<font class="ecjiafc-red">¥{if $type eq 'wait_grab'}{$content.shipping_fee}{else}{$content.commision}{/if}</font>元</span>
				</div>
				
				<div class="pickup_info">
					<ul>
						<li><h3>取货信息</h3></li><li>商家名称：<span>{$content.merchants_name}</span></li>
						<li>商家电话：<span>{if $content.contact_mobile}{$content.contact_mobile}{else}暂无{/if}</span></li>
						<li>下单时间：<span>{$content.add_time}</span></li>
						<li>取货地址：<span>{$content.all_address}&nbsp;&nbsp;&nbsp;&nbsp;{$content.address}</span></li>
					</ul>
				</div>
				
				<div class="delivery_info">
					<ul>
						<li><h3>送货信息</h3></li>
						<li>用户名称：<span>{$content.consignee}</span></li>
						<li>用户电话：<span>{$content.mobile}</span></li>
						<li>期望送达时间：<span>{if $content.expect_shipping_time}{$content.expect_shipping_time}{else}暂无{/if}</span></li>
						<li>送货地址：<span>{$content.express_all_address}&nbsp;&nbsp;&nbsp;&nbsp;{$content.eoaddress}</span></li>
					</ul>
				</div>
				{if $type neq 'wait_grab'}
				<div class="shipping_info">
					<ul>
						<li><h3>配送信息</h3></li>
						<li>配送员名称：<span>{$content.express_user}</span></li>
						<li>配送员电话：<span>{$content.express_mobile}</span></li>
						<li>任务类型：<span>{if $content.from eq 'assign'}派单{elseif $content.from eq 'grab'}抢单{/if}</span></li>
					</ul>
				</div>
				{/if}
				<div class="order_info">
					<ul>
			         	<li><h3>订单信息</h3></li>
			            <li>
			            	<div class="order">订单编号：<a  href='{url path="orders/admin/info" args="order_id={$content.order_id}"}' target="_blank">{$content.order_sn}</a></div>
			            	<div class="order">发货单号：<a  href='{url path="orders/admin_order_delivery/delivery_info" args="delivery_id={$content.delivery_id}"}' target="_blank">{$content.delivery_sn}</a></div>
			            </li>
			        </ul>
				</div>
				<div class="order_goods">
					<ul>
			         	<li><h3>发货单商品</h3></li>
			         	<!-- {foreach from=$goods_list item=list} -->
				            <li class="goodslist">
				            	<div class="goods-info">
					            	<div class="info-left" ><img src="{$list.image}" width="50" height="50" /></div>
					            	<div class="info-right">
						            	<span>{$list.goods_name}</span><span class="goods_number">数量：X{$list.send_number}</span>
						            	<p>{$list.formated_goods_price} </p>
					            	</div>
				            	</div>
				            </li>
			            <!-- {/foreach} -->
			        </ul>
				</div>
				
				<div class="order_desc">
					<ul>
			         	<li><h3>订单备注</h3></li>
			            <li>{if $content.postscript}{$content.postscript}{else}此用户没有填写备注内容{/if}</li>
			        </ul>
				</div>
			</div>
		</div>
	</div>