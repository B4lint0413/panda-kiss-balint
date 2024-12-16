<template>
<table class="table">
    <tbody>
        <tr>
            <th>Név</th>
            <td>{{panda.name}}</td>
        </tr>
        <tr>
            <th>Nem</th>
            <td>{{panda.sex}}</td>
        </tr>
        <tr>
            <th>Születés</th>
            <td>{{panda.birth}}</td>
        </tr>
        <tr>
            <th>Kor</th>
            <td>{{panda.age}}</td>
        </tr>
    </tbody>

</table>
</template>

<script>
export default{
    props: ['panda']
}
</script>