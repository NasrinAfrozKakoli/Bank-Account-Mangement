import axios from 'axios';

const state={
    bankAccounts:[],
    itemCount: 0,
};

const getters={
    allBankAccounts: (state) =>state.bankAccounts,
    itemCount: (state) =>state.itemCount,
};

const actions={
    async fetchBankAccounts({commit}) {
        const response= await axios.get('api/bank-account');

        commit('setBankAccounts',response.data);
    },
    async addBankAccounts({commit}, param){
        const response= await axios.post('api/bankAccounts',param);

        if(response.data.status){
            commit('newOrderItem',response.data.BankAccounts);
        }
        console.log(response.data.msg);
    }
};

const mutations={
    setBankAccounts: (state, bankAccounts) =>(state.bankAccounts = bankAccounts,state.itemCount = bankAccounts.length),
    newOrderItem: (state, BankAccounts) => state.bankAccounts.push(BankAccounts)
};

export default {
    state,
    getters,
    actions,
    mutations
};
