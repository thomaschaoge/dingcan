 @extends("home.index")
  @section("content")
  
  <div class="profile-panel" role="main">
  <h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope">
  <span ng-bind="pageTitle" class="ng-binding">更改密码</span>
  <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span>
  </h3>
  
	  <div class="profile-panelcontent" ng-transclude="">
	  <form class="changepwd ng-scope ng-pristine ng-valid" ng-submit="changePwdSubmit()" novalidate="">
	  <p class="changepwd-tip">
	  饿了么提示你：使用大小写字母、数字与标点符号的组合，可以大幅提升帐号安全！</p>
	  
	<div class="formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" ng-if="!firstSet" form-field="" label="当前密码" model="changePwdData" property="currentPwd">
	  <label ng-bind="label" class="ng-binding">当前密码</label>
	  <input type="password" name="current" ng-model="changePwdData.currentPwd" placeholder="请输入当前密码" class="ng-scope ng-pristine ng-valid">
	  <div class="formfield-hint">
	  <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
	  </div>
	</div>
	  
	  
	<div class="formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" form-field="" label="新密码" model="changePwdData" property="newPwd">
	  <label ng-bind="label" class="ng-binding">新密码</label>
	  <input type="password" name="newPwd" ng-model="changePwdData.newPwd" placeholder="请输入新密码" class="ng-scope ng-pristine ng-valid">
	  <div class="formfield-hint">
	  <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
	 </div>
	</div>
	  
	  
	<div class="formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" form-field="" label="确认密码" model="changePwdData" property="confirmPwd">
		  <label ng-bind="label" class="ng-binding">确认密码</label>
		  <input type="password" name="confirm" ng-model="changePwdData.confirmPwd" placeholder="请再次输入密码" class="ng-scope ng-pristine ng-valid">
		  <div class="formfield-hint">
		  <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
		  </div>
	</div>
	  
	  
    <div class="form-group formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" form-field="">
	  <label ng-bind="label" class="ng-binding"></label>
	  <button type="submit" class="btn-primary btn-lg ng-scope">确认</button>
	  <div class="formfield-hint">
	  <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding">
	  </span>
	   </div>
     </div>
    </form>
  </div>
</div>

    @endsection 
	
	