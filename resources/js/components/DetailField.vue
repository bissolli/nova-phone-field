<template>
    <panel-item :field="field">
        <template slot="value">
            <a :href="`tel:+${unmaskedValue}`" v-if="field.value" class="no-underline text-primary">
                {{ field.value }}
            </a>
            <p v-else>&mdash;</p>
        </template>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
    computed: {
        unmaskedValue() {
            return this.field.value ? this.field.value.replace(/\D/g, '') : '';
        }
    }
};
</script>
