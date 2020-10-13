<div class="tabs">
    <div class="tabs__triggers P18-b C-15">
        <div data-tab-name="tab-1" class="tab-trigger js-tab-trigger is-active">{{ $tab1['triggerName'] }}</div>
        <div data-tab-name="tab-2" class="tab-trigger js-tab-trigger">{{ $tab2['triggerName'] }}</div>
        <div data-tab-name="tab-3" class="tab-trigger js-tab-trigger">{{ $tab3['triggerName'] }}</div>
        <div data-tab-name="tab-4" class="tab-trigger js-tab-trigger">{{ $tab4['triggerName'] }}</div>
        <div data-tab-name="tab-5" class="tab-trigger js-tab-trigger">{{ $tab5['triggerName'] }}</div>
    </div>
    <div class="tab-content Py-l Py-s tab-1 is-active">
        @include('inc.components.tabs.tab-description')
    </div>
    <div class="tab-content Py-l Py-s tab-2">
        @include('inc.components.tabs.tab-proposal')
    </div>
    <div class="tab-content Py-l Py-s tab-3">
        @include('inc.components.tabs.tab-reviews')
    </div>
    <div class="tab-content Py-l Py-s tab-4">
        @include('inc.components.tabs.tab-guarantee')
    </div>
    <div class="tab-content Py-l Py-s tab-5">
        @include('inc.components.tabs.tab-certificate')
    </div>
</div>

