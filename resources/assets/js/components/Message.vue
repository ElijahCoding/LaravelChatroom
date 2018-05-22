<template>
  <div class="chat__message">
        <strong class="chat__message-user">

        </strong>
        <span class="chat__message-timestamp"></span>
        <p class="chat__message-body"></p>
    </div>
</template>

<style lang="scss">
    .chat {
        &__message {
            padding: 15px;
            border-bottom: 1px solid #eee;

            &--own {
                background-color: #f0f0f0;
            }

            &-user {
                font-weight: 800;
            }

            &-timestamp {
                color: #aaa;
            }

            &-body {
                margin-bottom: 0;
                white-space: pre-wrap;
            }
        }
    }
</style>
