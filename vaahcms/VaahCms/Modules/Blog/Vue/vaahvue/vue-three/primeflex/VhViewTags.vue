<script setup>
import {vaah} from '../../pinia/vaah.js'

const props = defineProps({
    label: {
        type: String,
        default: null
    },
    label_width: {
        type: String,
        default: '150px'
    },
    value:{
        default: null,
    },
    type: {
        type: String,
        default: 'text'
    },
    can_copy:{
        type: Boolean,
        default: false
    }
})

function getName(data){
    return data.map(data => data.name);
}

//['label', 'value', 'type']

</script>
<template>
    <tr>
        <td :style="{width: label_width}"><b>{{vaah().toLabel(label)}}</b></td>
        <template v-if="can_copy">
            <td v-html="value"></td>
            <td style="width: 40px;">
                <Button icon="pi pi-copy" @click="vaah().copy(value)" class=" p-button-text"></Button>
            </td>
        </template>
        <template v-else-if="type==='user'">
            <td colspan="2" >

                <template v-if="typeof value === 'object' && value !== null">
                    <Button  @click="vaah().copy(value.id)"  class="p-button-outlined p-button-secondary p-button-sm">
                        {{value.name}}
                    </Button>
                </template>

            </td>
        </template>
        <template v-else-if="type==='yes-no'">
            <td colspan="2">
                <Tag value="Yes" v-if="value===1" severity="success"></Tag>
                <Tag v-else value="No" severity="danger"></Tag>
            </td>
        </template>
        <template v-else-if="type==='array'">
            <td colspan="2">
                    <Chip v-for="(tag, index) in value.slice(0, 1)"
                        :key="index"
                        :label="tag.name"
                        class="p-chip-sm" />

                    <!-- if more tags exist -->
                    <Chip v-if="value.length > 1"
                        :label="`+${value.length - 1}`"
                        class="p-chip-sm cursor-pointer bg-green-200"
                        v-tooltip="getName(value).join(', ')"/>
            </td>
        </template>
        <template v-else>
            <td  colspan="2" v-html="value"></td>
        </template>

    </tr>
</template>
