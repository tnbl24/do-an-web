<?php
include_once("../layout/header.php");
?>
<div class="about">

    <div class="test">
        <p>Bye bye world!</p>
    </div>
    <div class="row align-items-end about-content">
        <div class="col about-col">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAACXBIWXMAAAsTAAALEwEAmpwYAAANmklEQVR4nO2ceWxUxxnAN73TqpdatVIPqUoTqVIPVa3av1KlavB7iyEmITiEJIQ2TUkToCShISUHjgL2m/WJT7BJArYhGLC5DAZzmRDvzHq9vhYbX+C1OWxjG2OwDb6n+ua9ed7jrXd97OZF2U+aP/x2vfPtb7+Z75tvvhmDISQh0a3MQ7bvCohYBYQ/NehcFsbbfigi8i7oK0p4QESEujbcJyBiFxFJFKLNvwq4Qn/MtH1VlPBJpXObQcciIvySIJE7ntC8tlEBkWj4jgFTSpDIBwq8K0Zk+ZlBj0LpfSLCGRzM6uw6WlR7izZ0j1JH34RLq+8apWcb79CYwhY632ThVpkfEIhGCUdCB4JE7oZFm39j0KmIEt4MeobHWmietcsDmrd2puE2fSKpnFtjypwqZYyyfEdA5BoDiPBqg07FiMjDAsLj4SYLPVxz0294vIE1AnhRwhNCDDbOmWLwi8jWhwkMEYNORUTkE9Az9fSVacPjbVvJNWaFAsKNczKUwZPBsGWmbbL8xaBTCUdkMegIw9B5vjvXdIeuyKymS5JtdJel0yfAS73jdPm2KgYxDOEVs1ZMQORt5RfRddgiIlwOekpHW1QYNe3DdPEWdV6jRkRoLvENcXfZDf4/9VFR9Euz9GikTbG+5QadyiNRJd8QER4HPcHiOAjwrvBs5c56mnS2iwF8LL6MWtvuugArrOmlS1MrWCu09zIrfCa9Uh7KJnPMI0kl35uRYuBtFesbjjCVftugUxEQ3gR6/j2rWoVSd2OERsSXUaPJQvfU3KNFlybo63svMyjr8xpcAAI4bqVPp1WwZymnr6rPBImMiRK+KEh4jyCRN40SXiNI1icFhP/8t2jyY1hcaComSmSt8gGnDToWUYkQss5dU6FsP3+dfflXchoZPGj7LwzRBQAVLLW5X32vc0DNAYJHZnNqopUujCvzHYhLeMBDMQGRfcqLmw06FSEGP8i/RPX1YRXKmpw69gyGLgcIbcOBVvb87fwmD4AA76i9lz270DHMni1NsdHR8Qna1DFAj1Z20qyzrfS59EmLNSIlAJdwi4dyokTK2JskHGnQqQgS2c+/DAcCXjg8zsJWFwfrR10A7rHfY8MaXgcn49Ub3xxnnwlzprt09g0xsMzCd9g5wJMeyokId+o9fBEQHnQHCE4B/l6+ze4Cj7eXsxvY6+lnr3oFCNYM71mWZqNacuP2EI0tbKbrdtUqcSN521M5Jf7T69ItXIn93AFuVYLhN/MdmgC3mnvVIXv51rgmwNMNt9l7Vu2wU28yOjahWqJown/wUBDSPfAieBqDjmM/0Q3gxoJm9nfsqU5NgMcuTdCl6XKwfKhae8mX9YnshJJPtHgFWFjZya0Pe1OQDeF5ptKfGHQc+4luAFd+KM9L2y19mgChxRxvZ+95dddFTYCrsuWhWVLXrQmvp3+YRiYrQbqJRGgqCWtfJYJ/2KDT2G9ZRrUHwGVpchC81z7kFeDB+hG6UAlpylpdA2vcMsieP55opfdGxj3gwbPX+dwn4QJ/8n/xBp3GfpuOXfMAGJFglYdng6sHdm/rlMA6rqjVBeCG/U3seWpxi6bzeDVXhidKuCkszvwjr0oKkmWlshIZFCXyC4NOZN775CHQC8KU/ReGPQAaTWxYsbluKoDZtn45WE4qp003x9j/FlR0s2cRCWVsmIIMDI3RxvZ+ur2kjVmlwsThkwk4D7aMkU21Vi/ORFBiv5ey6xkId4D8Sx5pHJsSILQVWRfk4V7eRQ9W9dAFsb5XHQIiH/u9Pp7cA2EQr4ZJ+DGDTmK/5HPdmgD5HJhfO+wToOmk7Elh5TIfkqnawHoFiVSIEkmdj/Bvp6WsKJG/anxgJWSmF0iffj9glLyIiMgZ0GFRQjktbBrTBMg9aNqnN30C/Lj6Lnvv5Ho3APM9JBPkecFKl6RMrgPl4Y2rRYQzjSbyimAyL4Sg+1HJ+gDAnWvAHB6sP53XuO4Ak4rb2N+v7bnkE+CRhjGXbc6wuOpvGeZaAAjfIjQVd9DkT3royzkNNCJhMlkZrGZ0g6cFEMIScDCw5gVHMRVACHWcAGYaAiWChJ/nnm+b+ZYc0TeP0522foqKO+hbB9vo6txG+nymnT6VWkmf2GKjEYnlzBvOGTyTJzwtgNA2HZZDlOWZ9inDmZgT7ZMjKoYsNQRSRIQRdPRYgpXmVAz4HB5FQWpaAOu6RlRn8q8dF+lhDY/8cdVd+jj8yCpA/GBAAbIUv0R2QWeLkytYglKvAB19E9TcMkAXK3u9S1IqmfVCeuvAxRFqOtmhwuOb6gGZ/zTXoBIx8+Gh9csW6QQgW5Y5Blmq39u08MYeObUFzRAseTSm7AeQgYVO/51dz+ZCvQJ09E3Q5ptjdKe5g768s5btk0Cg/Z+cOppf0e2SkTYEU0SE83jH/yto1TVAh48WdIALNuOfQjUTzB3hytIHvFkIoJ8CQTNA27Cvke63dbPUD4Qraed9R/4hC5TXokcB4F6l+int9BVmhbBl+JH1TgigLxEk0gDAiGOQAWzpm6DvHbjEIC5OttG9dnkjO2SB3gAifBtgQYGiug3YO07X5l5kEJ/JqGYZ3xBADXkkquQrLPiMtXh4MwD6j6waBnHljnp6NEjhzefKC7MYkJU8lGsqY7t6j0YqW32v510OAfQAKFkfcK4h0WrnmvtZwMr3LEIW6CRhsaW/d6+E0moFlT1sbwJCHK0Myhd2CAuIhEFna73spzo0NqcXxJXRD8tu6xJgY4+cUIUqjOAAlPAatvIonKwEnapJR+Uix0WJ5Sx9rjeAldd4QhVfCRbAdOgQrMsfBS/fGlczHrAJDqkkPQHkNTBQiRYUgKKEz0KH0zlG0NA9Sl/cLpdbvPBBrboZpAeAUJTJhjDCaYGnR+l9goS73YsZ/WlV7UPMc8P/rtnd5HPT298G6Xq+4TUTgK/tloN/wYSfDTg/XjMNBdgzUfb85X617CLqyJU5AZhbOcg+77mtVTOa/2CfBRzIjAvJpyOiZF4Fyr5T0DwjgA6l+JHtmCFCE+cgvOGbQu8emL5O6JhD8cA4J+DwZICYlVTk4I4ZA3T0TbDsMF8OZhHvJWg+W/MEXZYup+uhpmU6OpgdgxSOhEFeU0Rlvw44vMio2q+JErkFlgOmPxuAF7tG6aqdSoWTkgaDrdDVu5rYZo+/iQhe4/dcRhVLZkzHqfE1O0QVhmBIGCLzocN/bq+ZFbyCyh6X00NaDYD+d38Lza/zXtsCZbpgwfCDwrQwHXhQVKnAq4WDlEEBKCLyIXQKB1BmCi/j7FU5e40IfTazjm483k3jzw/SFDxM1x/q8DiPAQ4HrMw5qwMbWNHHr6uFQInFbf4P25YB+oJieWyjPrb0l0GBF5mA74cKJVGjmtPfZlImbPB66w+10622cbpNaUmld+miJF5zg8/MjyldKkoW+YSAEoCj4na6+fh1dc5ja2w/4EEgf7K+j75/6LLToeogbyLxso6XProwI3ipSsofrOa9E70qOGhplhG6JE2GIiByyphc9HXeryiRd0SEh92HOEz+qad8H2mFYJ+n1vgG+iu7W4IPUESkVPa+vk86OtxatuJxwfI2FvW4wIP2YnaTejJSKxaDagEhBm8RJXxdRAQujhhhlQbJNq9HFNzPwC1JraZr8trYdAF9BhWgMcb8J55AbeiRy2D9bfts3WrMt6Hwhge8DUfkY6VQ+TXPRB7yVydBIpdEt/NuWo2Dcu83qAB57Bd/3LUQ21fLs3apc866gmseX2LTqb7JOWmaR2l58buvhMZnDtAYS34HdxDAebGpzpW5t12kUy70hnVvXqvHFzCV3GGhykwrQgE4/C9keXQNUES4mFnfibZp3TlgVBRcl+9pedFn+lh5nJIByZ3JHQzCJuvP+bQy1TyoA4ByR3D00xc4WAlEKyfERRNhoYq74u8e61ZLQQQJH57NpQ7+zIO6AehPqmptrnw+d35smYe3zbCO0tV7WlXLhGr3yH37vjwb3fyZBz8XACHWejJZjrUiEm1UOnPbRdnYc/30qXQ1+h+FU/Bzopsf86CuAYJT2XhAPhXJFvRZdXSLeUhVMsUyzByI6mmhnnAOzx3D1VPwuVDr520e1C1AuIuKnwZaEG+lbxxwXZq9d+ImXRhf7nRhA0ldGGX75lzr52se1C3AZ5UrQVZ8UM/Wse4KLlLWtYJETgTysLaveVC3AL0pFmwFRR/zYAjgLOfBEMBZzoMhgLOcB0MAZzkPhgBOc13svrH0mQPkJzTd7x/licrwuDL69NYLbN2bYR1TFXycp+clPAAXV8DZYtjVC5yeuAb6g5vXtPSE6rBlTnoGTT8RYQt0BEfhnRUDRZ1vPIP2VLqdJpnvyYF0ce+kkvwgHyKVgbo+hd9xCIXuvvRcmmanbxV2BUc/+GXgw5/fVk1rb4x4zDFwxRxsU0JZBVMu3e5iialkmCUWFqfIr8Ox+UD80nDKEvKWsKtnvXLXt55psp4B1w8+DH4Z1mlqBdv9d67Md1aQK7f+oGcaCxTlSkJ5iCEAIiC8Az5/+dYqeryuT/PaY9ATXmdOx0nPgOoHZs0hzkUT4CLbAAhcEMluLNejfnJZh3kV3BElItI/OwXJnTlXkOuZgO8XJfwWOBXnW930ol9IQmIIivwfT+PJX3yEcccAAAAASUVORK5CYII=">
            <h6>Diverse Dog Breeds</h6>
            <p>In the new era of technology we look in the future with certainty life.</p>
        </div>
        <div class="col about-col">
            <img src="data:image/png;base64,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">
            <h6>Easy To Order</h6>
            <p>In the new era of technology we look in the future with certainty life.</p>
        </div>
        <div class="col about-col">
            <img src="data:image/png;base64,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">
            <h6>Fast Delivery</h6>
            <p>In the new era of technology we look in the future with certainty life.</p>
        </div>
    </div>
</div>
<?php
include_once("../layout/footer.php");
?>