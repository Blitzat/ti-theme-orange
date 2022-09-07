---
title: 'main::lang.home.title'
permalink: /
description: ''
layout: default
'[slider]':
    code: home-slider
'[localSearch]':
    hideSearch: 0
'[featuredItems]':
    items: ['6', '7', '8', '9']
    limit: 3
    itemsPerRow: 3
    itemWidth: 400
    itemHeight: 300
'[localList]':
    alias: '[localList]'
    distanceUnit: mi
    searchParamName: search
    sortByParamName: sort_by
    orderTypeParamName: order_type
---
@component('slider')
<div class="container">
    <div class="row py-4">
        <div class="location-list">
            @partial('localList::search')

            @partial('localList::sorting')

            @component('localList')
        </div>
    </div>
</div>