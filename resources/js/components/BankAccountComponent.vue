<template>
  <div>
    <b-table striped hover :items="allBankAccounts"></b-table>
    <form @submit.prevent="submit">
      <div class="form-group">
        <label for="account_name">Account Name</label>
        <input
          type="text"
          class="form-control"
          name="account_name"
          id="account_name"
          v-model="fields.account_name"
        />
        <div v-if="errors && errors.account_name" class="text-danger">
          {{ errors.account_name[0] }}
        </div>
      </div>

      <div class="form-group">
        <label for="financial_organization_id">Bank</label>
        <select
          class="form-control"
          name="financial_organization_id"
          id="financial_organization_id"
          v-model="fields.financial_organization_id"
        >
          <option value="1">IFICBL</option>
          <option value="2">SEBL</option>
          <option value="3">CBL</option>
        </select>
        <div
          v-if="errors && errors.financial_organization_id"
          class="text-danger"
        >
          {{ errors.financial_organization_id[0] }}
        </div>
      </div>

      <div class="form-group">
        <label for="branch">Branch</label>
        <input
          type="text"
          class="form-control"
          name="branch"
          id="branch"
          v-model="fields.branch"
        />
        <div v-if="errors && errors.branch" class="text-danger">
          {{ errors.branch[0] }}
        </div>
      </div>

      <div class="form-group">
        <label for="account_type">Account Type</label>
        <input
          type="text"
          class="form-control"
          name="account_type"
          id="account_type"
          v-model="fields.account_type"
        />
        <div v-if="errors && errors.account_type" class="text-danger">
          {{ errors.account_type[0] }}
        </div>
      </div>

      <div class="form-group">
        <label for="swift_code">Swift Code</label>
        <input
          type="text"
          class="form-control"
          name="swift_code"
          id="swift_code"
          v-model="fields.swift_code"
        />
        <div v-if="errors && errors.swift_code" class="text-danger">
          {{ errors.swift_code[0] }}
        </div>
      </div>

      <div class="form-group">
        <label for="route_no">Rouute No</label>
        <input
          type="text"
          class="form-control"
          name="route_no"
          id="route_no"
          v-model="fields.route_no"
        />
        <div v-if="errors && errors.route_no" class="text-danger">
          {{ errors.route_no[0] }}
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Save / Update</button>

      <div v-if="success" class="alert alert-success mt-3">Account Added!</div>
    </form>
  </div>
</template>

<script>
import FormMixin from "../assets/FormMixin";
import { mapActions, mapGetters } from "vuex";
export default {
  mixins: [FormMixin],

  data() {
    return {
      action: "api/bank-account",
      items: [
        { age: 40, first_name: "Dickerson", last_name: "Macdonald" },
        { age: 21, first_name: "Larsen", last_name: "Shaw" },
        { age: 89, first_name: "Geneva", last_name: "Wilson" },
        { age: 38, first_name: "Jami", last_name: "Carney" },
      ],
    };
  },
  mounted() {},
  methods: {
    ...mapActions(["fetchBankAccounts", "addBankAccounts"]),
  },
  computed: {
    ...mapGetters(["allBankAccounts", "itemCount"]),
  },
  created() {
    this.fetchBankAccounts();
  },
};
</script>