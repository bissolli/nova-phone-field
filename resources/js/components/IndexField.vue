<template>
    <a :href="`tel:+${unmaskedValue}`" class="no-underline text-primary"> {{ field.value }} </a>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
    computed: {
        unmaskedValue() {
            return this.field.value ? this.field.value.replace(/\D/g, '') : '';
        }
    }
};
</script>
